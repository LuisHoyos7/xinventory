<template>
  <div class="card card-custom">
    <div class="card-header">
      <div class="card-title">
        <h3 class="card-label">Crear Factura de venta</h3>
      </div>
      <div class="card-toolbar">
        <div class="form-group row mb-0">
          <div class="col-md-5">
            <label>Fecha:</label>
            <input type="date" class="form-control" v-model="invoiceDate"/>
          </div>
          <div class="col-md-7">
            <label>Cliente:</label>
            <input type="text" class="form-control" placeholder="Cliente" v-model="customer"/>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
          <thead>
            <tr class="text-uppercase">
              <th style="min-width: 250px" class="pl-7">
                <span class="text-dark-75">producto</span>
              </th>
              <th style="min-width: 100px">cant</th>
              <th style="min-width: 100px">precio</th>
              <th style="min-width: 100px">IVA</th>
              <th style="min-width: 100px">desc</th>
              <th style="min-width: 100px">total</th>
              <th style="min-width: 120px"></th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div>
                      <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Extreanet Solution</a>
                      <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">1</span>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">19%</span>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$0</span>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                </td>
                <td class="text-right pr-0">
                  <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mr-3">
                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-09-29-132851/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24"/>
                          <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                          <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                      </g>
                  </svg><!--end::Svg Icon--></span>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div>
                      <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Extreanet Solution</a>
                      <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">1</span>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">19%</span>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$0</span>
                </td>
                <td>
                  <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                </td>
                <td class="text-right pr-0">
                  <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mr-3">
                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-09-29-132851/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24"/>
                          <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                          <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                      </g>
                  </svg><!--end::Svg Icon--></span>
                  </a>
                </td>
              </tr>
            </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-end pb-10">
        <a href="#" class="btn btn-primary mr-3">
          <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-09-29-132851/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>Agregar</a>
      </div>
      <div class="row d-flex justify-content-end">
        <div class="col-md-4">
          <div class="d-flex justify-content-between">
            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Subtotal</span>
            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1000</span>
          </div>
          <div class="d-flex justify-content-between">
            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">IVA(19%)</span>
            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$190</span>
          </div>
          <hr>
          <div class="d-flex justify-content-between">
            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Total</span>
            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1190</span>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end py-5">
        <a href="#" class="btn btn-danger btn-lg">CREAR FACTURA</a>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: () => ({
      invoiceDate: new Date().toISOString().slice(0,10),
      customer: 'John Doe'
    })
  }
</script>
