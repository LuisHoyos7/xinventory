<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceStoreRequest;
use App\Http\Requests\InvoiceUpdateRequest;
use App\Invoice;
use App\Article;
use App\Person;
use App\ArticleInvoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $invoices = Invoice::all();

        return view('invoice.index', compact('invoices'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $people = Person::all();

        $articles = Article::all();

        return view('invoice.create', compact('articles', 'people'));
    }

    /**
     * @param \App\Http\Requests\InvoiceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceStoreRequest $request)
    {
       
       
        //se crea el encabezado de la factura 
        $invoice = Invoice::create([
            'person_id'  => $request->person_id,
            'date'       => date('d-m-y'),
            'payment_type_id' => 1,
            'estado_id'   =>2,
            'number_invoice' => 1,
        ]);

        foreach($request->detalle as $key=>$detalles)
        {
           

            // se crean los detalles de la factura 
            // se buscan los id DE TODOS LOS ARTICULOS QUE VIENEN EN EL ARRAY detalle[]
            $article = Article::findOrFail($key);
     
            $articleInvoice = ArticleInvoice::create([
                'article_id' => $key,
                'invoice_id' => $invoice->id,
                'iva_id'     => 2,
                'amount_article'  => $detalles['amount'],
                'price_article' => $detalles['price'], 
                'discount' => $detalles['discount'], // ojo este el descuento por alguna promocion del articulo , no el descuento a una cantidad del articulo
            ]);
               
            
        }

        $request->session()->flash('invoice.id', $invoice->id);

        return redirect()->route('invoice.index')
            ->with('success', 'Factura Generada con Exito');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Invoice $invoice)
    {
        return view('invoice.show', compact('invoice'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Invoice $invoice)
    {
        return view('invoice.edit', compact('invoice'));
    }

    /**
     * @param \App\Http\Requests\InvoiceUpdateRequest $request
     * @param \App\Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(InvoiceUpdateRequest $request, Invoice $invoice)
    {
        $invoice->update([]);

        $request->session()->flash('invoice.id', $invoice->id);

        return redirect()->route('invoice.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoice.index');
    }
}
