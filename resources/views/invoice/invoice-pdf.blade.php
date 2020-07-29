<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="company" content="Microsoft Corporation" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style1 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:white }
      th.style1 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:white }
      td.style2 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#A5A5A5; font-family:'Roboto'; font-size:20pt; background-color:white }
      th.style2 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#A5A5A5; font-family:'Roboto'; font-size:20pt; background-color:white }
      td.style3 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#4472C4; font-family:'Roboto'; font-size:22pt; background-color:white }
      th.style3 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#4472C4; font-family:'Roboto'; font-size:22pt; background-color:white }
      td.style4 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#4472C4; font-family:'Roboto'; font-size:22pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#4472C4; font-family:'Roboto'; font-size:22pt; background-color:white }
      td.style5 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#666666; font-family:'Roboto'; font-size:24pt; background-color:white }
      th.style5 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#666666; font-family:'Roboto'; font-size:24pt; background-color:white }
      td.style6 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style6 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#434343; font-family:'Roboto'; font-size:11pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#434343; font-family:'Roboto'; font-size:11pt; background-color:white }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#7F7F7F; font-family:'Roboto'; font-size:18pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#7F7F7F; font-family:'Roboto'; font-size:18pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:11pt; background-color:white }
      th.style10 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:11pt; background-color:white }
      td.style11 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style11 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Roboto'; font-size:11pt; background-color:white }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Roboto'; font-size:11pt; background-color:white }
      td.style13 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1F3864; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style13 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1F3864; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style14 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1F3864; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style14 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1F3864; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1155CC; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1155CC; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style18 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style18 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style23 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style23 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style24 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style24 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style25 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style25 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style26 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#333F4F; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style26 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#333F4F; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style27 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style27 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style28 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#1F3864; font-family:'Roboto'; font-size:11pt; background-color:white }
      th.style28 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#1F3864; font-family:'Roboto'; font-size:11pt; background-color:white }
      td.style29 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style29 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style30 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Roboto'; font-size:9pt; background-color:#1155CC }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Roboto'; font-size:9pt; background-color:#1155CC }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:none #000000; border-right:1px solid #999999 !important; font-weight:bold; color:#FFFFFF; font-family:'Roboto'; font-size:9pt; background-color:#1155CC }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:none #000000; border-right:1px solid #999999 !important; font-weight:bold; color:#FFFFFF; font-family:'Roboto'; font-size:9pt; background-color:#1155CC }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style34 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style34 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style35 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style35 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style36 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:#F3F3F3 }
      th.style36 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:#F3F3F3 }
      td.style37 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:#F3F3F3 }
      th.style37 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:#F3F3F3 }
      td.style38 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style39 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style40 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style41 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style41 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style42 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style42 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style43 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#333F4F; font-family:'Roboto'; font-size:12pt; background-color:white }
      th.style43 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#333F4F; font-family:'Roboto'; font-size:12pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#333F4F; font-family:'Roboto'; font-size:8pt; background-color:white }
      th.style44 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#333F4F; font-family:'Roboto'; font-size:8pt; background-color:white }
      td.style45 { vertical-align:middle; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style45 { vertical-align:middle; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style46 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style46 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style47 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#333F4F; font-family:'Roboto'; font-size:8pt; background-color:white }
      th.style47 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#333F4F; font-family:'Roboto'; font-size:8pt; background-color:white }
      td.style48 { vertical-align:middle; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style48 { vertical-align:middle; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style49 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style49 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style50 { vertical-align:middle; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style50 { vertical-align:middle; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style51 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style51 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style52 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1155CC; font-family:'Roboto'; font-size:12pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1155CC; font-family:'Roboto'; font-size:12pt; background-color:white }
      td.style53 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:#C9DAF8 }
      th.style53 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:#C9DAF8 }
      td.style54 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style54 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:white }
      th.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:white }
      td.style56 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #999999 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1155CC; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style56 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #999999 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1155CC; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#333F4F; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style57 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#333F4F; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style58 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style58 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style59 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:white }
      th.style59 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:white }
      td.style60 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style60 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style61 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#434343; font-family:'Roboto'; font-size:11pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#434343; font-family:'Roboto'; font-size:11pt; background-color:white }
      td.style62 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style62 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:11pt; background-color:white }
      th.style63 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:11pt; background-color:white }
      td.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:#F3F3F3 }
      th.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:#F3F3F3 }
      td.style65 { vertical-align:bottom; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style65 { vertical-align:bottom; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:none #000000; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style66 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style66 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1155CC; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style67 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#1155CC; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style68 { vertical-align:bottom; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style68 { vertical-align:bottom; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style69 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style69 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style70 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style70 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style71 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:#F3F3F3 }
      th.style71 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:1px solid #BFBFBF !important; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:#F3F3F3 }
      td.style72 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#666666; font-family:'Roboto'; font-size:21pt; background-color:white }
      th.style72 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#666666; font-family:'Roboto'; font-size:21pt; background-color:white }
      td.style73 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#1155CC; font-family:'Roboto'; font-size:20pt; background-color:white }
      th.style73 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#1155CC; font-family:'Roboto'; font-size:20pt; background-color:white }
      td.style74 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style74 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style75 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style75 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style76 { vertical-align:bottom; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style76 { vertical-align:bottom; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #BFBFBF !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style77 { vertical-align:middle; text-align:center; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:1px solid #999999 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Roboto'; font-size:9pt; background-color:#1155CC }
      th.style77 { vertical-align:middle; text-align:center; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:1px solid #999999 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Roboto'; font-size:9pt; background-color:#1155CC }
      td.style78 { vertical-align:bottom; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style78 { vertical-align:bottom; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style79 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#1155CC; font-family:'Roboto'; font-size:24pt; background-color:white }
      th.style79 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#1155CC; font-family:'Roboto'; font-size:24pt; background-color:white }
      td.style80 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#666666; font-family:'Roboto'; font-size:24pt; background-color:white }
      th.style80 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#666666; font-family:'Roboto'; font-size:24pt; background-color:white }
      td.style81 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style81 { vertical-align:middle; text-align:center; border-bottom:1px solid #BFBFBF !important; border-top:none #000000; border-left:1px solid #BFBFBF !important; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style82 { vertical-align:middle; text-align:center; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Roboto'; font-size:9pt; background-color:#1155CC }
      th.style82 { vertical-align:middle; text-align:center; border-bottom:1px solid #999999 !important; border-top:1px solid #999999 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Roboto'; font-size:9pt; background-color:#1155CC }
      td.style83 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:18pt; background-color:white }
      th.style83 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:18pt; background-color:white }
      td.style84 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style84 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style85 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:9pt; background-color:white }
      th.style85 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:9pt; background-color:white }
      td.style86 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:10pt; background-color:white }
      th.style86 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#333F4F; font-family:'Roboto'; font-size:10pt; background-color:white }
      td.style87 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:white }
      th.style87 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto'; font-size:12pt; background-color:white }
      table.sheet0 col.col0 { width:18.97777756pt }
      table.sheet0 col.col1 { width:52.18888829pt }
      table.sheet0 col.col2 { width:115.89999867pt }
      table.sheet0 col.col3 { width:73.87777693pt }
      table.sheet0 col.col4 { width:52.18888829pt }
      table.sheet0 col.col5 { width:54.2222216pt }
      table.sheet0 col.col6 { width:65.06666592pt }
      table.sheet0 col.col7 { width:71.16666585pt }
      table.sheet0 col.col8 { width:35.24444404pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:27pt }
      table.sheet0 tr.row1 { height:23.25pt }
      table.sheet0 tr.row2 { height:18.75pt }
      table.sheet0 tr.row3 { height:18.75pt }
      table.sheet0 tr.row4 { height:18.75pt }
      table.sheet0 tr.row5 { height:18pt }
      table.sheet0 tr.row6 { height:18pt }
      table.sheet0 tr.row7 { height:18pt }
      table.sheet0 tr.row8 { height:18pt }
      table.sheet0 tr.row9 { height:18pt }
      table.sheet0 tr.row10 { height:18pt }
      table.sheet0 tr.row11 { height:15.75pt }
      table.sheet0 tr.row12 { height:18pt }
      table.sheet0 tr.row13 { height:18pt }
      table.sheet0 tr.row14 { height:18pt }
      table.sheet0 tr.row15 { height:18pt }
      table.sheet0 tr.row16 { height:18pt }
      table.sheet0 tr.row17 { height:18pt }
      table.sheet0 tr.row18 { height:18pt }
      table.sheet0 tr.row19 { height:18pt }
      table.sheet0 tr.row20 { height:18pt }
      table.sheet0 tr.row21 { height:18pt }
      table.sheet0 tr.row22 { height:18pt }
      table.sheet0 tr.row23 { height:18pt }
      table.sheet0 tr.row24 { height:18pt }
      table.sheet0 tr.row25 { height:18pt }
      table.sheet0 tr.row26 { height:19.5pt }
      table.sheet0 tr.row27 { height:19.5pt }
      table.sheet0 tr.row28 { height:19.5pt }
      table.sheet0 tr.row29 { height:19.5pt }
      table.sheet0 tr.row30 { height:19.5pt }
      table.sheet0 tr.row31 { height:19.5pt }
      table.sheet0 tr.row32 { height:33.75pt }
      table.sheet0 tr.row33 { height:9.75pt }
      table.sheet0 tr.row34 { height:9.75pt }
      table.sheet0 tr.row35 { height:15.75pt }
      table.sheet0 tr.row36 { height:15.75pt }
      table.sheet0 tr.row37 { height:21pt }
      table.sheet0 tr.row38 { height:15.75pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.5in; margin-right: 0.5in; margin-top: 0.5in; margin-bottom: 0.5in; }
body { margin-left: 0.5in; margin-right: 0.5in; margin-top: 0.5in; margin-bottom: 0.5in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <tbody>
          <tr class="row0">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style3 null"></td>
            <td class="column4 style3 null"></td>
            <td class="column5 style3 null"></td>
            <td class="column6 style3 null">
<div style="position: relative;"><img style="position: absolute; z-index: 1; left: 60px; top: 18px; width: 162px; height: 162px;" src="zip:///home/CloudConvertio/tmp/in_work/73ae74b70e6248a8cc220370de825bab.xlsx#xl/media/image1.png" border="0" /></div></td>
            <td class="column7 style4 null"></td>
            <td class="column8 style4 null"></td>
          </tr>
          <tr class="row1">
            <td class="column0 style1 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style73 s style62" colspan="2">&lt;Company Name&gt;</td>
            <td class="column4 style3 null"></td>
            <td class="column5 style3 null"></td>
            <td class="column6 style72 null style62" colspan="2"></td>
            <td class="column8 style4 null"></td>
          </tr>
          <tr class="row2">
            <td class="column0 style6 null"></td>
            <td class="column1 style79 s style62" rowspan="7">&nbsp;#301</td>
            <td class="column2 style61 s style62" colspan="3">&lt;123 Street Address, City, State, Zip/Post&gt;</td>
            <td class="column5 style7 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style8 null"></td>
            <td class="column8 style9 null"></td>
          </tr>
          <tr class="row3">
            <td class="column0 style6 null"></td>
            <td class="column2 style63 s style62" colspan="3">&lt;Website, Email Address&gt;</td>
            <td class="column5 style10 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style8 null"></td>
            <td class="column8 style9 null"></td>
          </tr>
          <tr class="row4">
            <td class="column0 style6 null"></td>
            <td class="column2 style74 s style62" colspan="3">&lt;Phone Number&gt;</td>
            <td class="column5 style11 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style8 null"></td>
            <td class="column8 style9 null"></td>
          </tr>
          <tr class="row5">
            <td class="column0 style6 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style1 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style12 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style13 null"></td>
            <td class="column8 style14 null"></td>
          </tr>
          <tr class="row6">
            <td class="column0 style6 null"></td>
            <td class="column2 style10 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style15 null"></td>
            <td class="column5 style15 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style16 null"></td>
            <td class="column8 style16 null"></td>
          </tr>
          <tr class="row7">
            <td class="column0 style6 null"></td>
            <td class="column2 style10 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style12 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style14 null"></td>
            <td class="column8 style14 null"></td>
          </tr>
          <tr class="row8">
            <td class="column0 style6 null"></td>
            <td class="column2 style17 s">BILL TO</td>
            <td class="column3 style1 null"></td>
            <td class="column4 style67 s style68" colspan="2">SHIP TO</td>
            <td class="column6 style18 null"></td>
            <td class="column7 style19 null"></td>
            <td class="column8 style20 null"></td>
          </tr>
          <tr class="row9">
            <td class="column0 style6 null"></td>
       
            <td class="column2 style21 s">&lt;Contact Name&gt;</td>
            <td class="column3 style1 null"></td>
            <td class="column4 style69 s style62" colspan="2">&lt;Name / Dept&gt;</td>
            <td class="column6 style22 s">Invoice Date:</td>
            <td class="column7 style23 s">11/11/11</td>
            <td class="column8 style12 null"></td>
          </tr>
          <tr class="row10">
            <td class="column0 style6 null"></td>
            <td class="column2 style21 s">&lt;Client Company Name&gt;</td>
            <td class="column3 style1 null"></td>
            <td class="column4 style69 s style62" colspan="2">&lt;Client Company Name&gt;</td>
            <td class="column6 style24 s">Due Date:</td>
            <td class="column7 style25 s">12/12/12</td>
            <td class="column8 style26 null"></td>
          </tr>
          <tr class="row11">
            <td class="column0 style6 null"></td>
            <td class="column2 style21 s">&lt;Address&gt;</td>
            <td class="column3 style1 null"></td>
            <td class="column4 style69 s style62" colspan="2">&lt;Address&gt;</td>
            <td class="column6 style27 null"></td>
            <td class="column7 style28 null"></td>
            <td class="column8 style28 null"></td>
          </tr>
          <tr class="row12">
            <td class="column0 style6 null"></td>
            <td class="column2 style21 s">&lt;Phone, Email&gt;</td>
            <td class="column3 style29 null"></td>
            <td class="column4 style69 s style62" colspan="2">&lt;Phone&gt;</td>
            <td class="column6 style27 null"></td>
            <td class="column7 style30 null"></td>
            <td class="column8 style30 null"></td>
          </tr>
          <tr class="row13">
            <td class="column0 style6 null"></td>
            <td class="column2 style21 null"></td>
            <td class="column3 style29 null"></td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6 style30 null"></td>
            <td class="column7 style30 null"></td>
            <td class="column8 style30 null"></td>
          </tr>
          <tr class="row14">
            <td class="column0 style6 null"></td>
            <td class="column2 style77 s style78" colspan="2">DESCRIPTION</td>
            <td class="column4 style31 s">QTY</td>
            <td class="column5 style82 s style78" colspan="2">UNIT PRICE</td>
            <td class="column7 style32 s">TOTAL</td>
            <td class="column8 style14 null"></td>
          </tr>
          <tr class="row15">
            <td class="column0 style6 null"></td>
            <td class="column2 style75 null style76" colspan="2"></td>
            <td class="column4 style33 null"></td>
            <td class="column5 style81 null style76" colspan="2"></td>
            <td class="column7 style34 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row16">
            <td class="column0 style6 null"></td>
            <td class="column2 style71 null style65" colspan="2"></td>
            <td class="column4 style36 null"></td>
            <td class="column5 style64 null style65" colspan="2"></td>
            <td class="column7 style37 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row17">
            <td class="column0 style6 null"></td>
            <td class="column2 style70 null style65" colspan="2"></td>
            <td class="column4 style38 null"></td>
            <td class="column5 style66 null style65" colspan="2"></td>
            <td class="column7 style39 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row18">
            <td class="column0 style6 null"></td>
            <td class="column2 style71 null style65" colspan="2"></td>
            <td class="column4 style36 null"></td>
            <td class="column5 style64 null style65" colspan="2"></td>
            <td class="column7 style37 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row19">
            <td class="column0 style6 null"></td>
            <td class="column2 style70 null style65" colspan="2"></td>
            <td class="column4 style38 null"></td>
            <td class="column5 style66 null style65" colspan="2"></td>
            <td class="column7 style39 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row20">
            <td class="column0 style6 null"></td>
            <td class="column2 style71 null style65" colspan="2"></td>
            <td class="column4 style36 null"></td>
            <td class="column5 style64 null style65" colspan="2"></td>
            <td class="column7 style37 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row21">
            <td class="column0 style6 null"></td>
            <td class="column2 style70 null style65" colspan="2"></td>
            <td class="column4 style38 null"></td>
            <td class="column5 style66 null style65" colspan="2"></td>
            <td class="column7 style39 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row22">
            <td class="column0 style6 null"></td>
            <td class="column2 style71 null style65" colspan="2"></td>
            <td class="column4 style36 null"></td>
            <td class="column5 style64 null style65" colspan="2"></td>
            <td class="column7 style37 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row23">
            <td class="column0 style6 null"></td>
            <td class="column2 style70 null style65" colspan="2"></td>
            <td class="column4 style38 null"></td>
            <td class="column5 style66 null style65" colspan="2"></td>
            <td class="column7 style39 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row24">
            <td class="column0 style6 null"></td>
            <td class="column2 style71 null style65" colspan="2"></td>
            <td class="column4 style36 null"></td>
            <td class="column5 style64 null style65" colspan="2"></td>
            <td class="column7 style37 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row25">
            <td class="column0 style6 null"></td>
            <td class="column2 style70 null style65" colspan="2"></td>
            <td class="column4 style38 null"></td>
            <td class="column5 style66 null style65" colspan="2"></td>
            <td class="column7 style40 f">0.00</td>
            <td class="column8 style35 null"></td>
          </tr>
          <tr class="row26">
            <td class="column0 style6 null"></td>
            <td class="column2 style41 null"></td>
            <td class="column3 style42 null"></td>
            <td class="column4 style43 null"></td>
            <td class="column5 style43 null"></td>
            <td class="column6 style44 s">SUBTOTAL</td>
            <td class="column7 style45 f">0.00</td>
            <td class="column8 style46 null"></td>
          </tr>
          <tr class="row27">
            <td class="column0 style6 null"></td>
            <td class="column2 style84 s style62" colspan="2" rowspan="5">Tank you for your business!</td>
            <td class="column4 style43 null"></td>
            <td class="column5 style43 null"></td>
            <td class="column6 style47 s">DISCOUNT</td>
            <td class="column7 style45 n">0.00</td>
            <td class="column8 style46 null"></td>
          </tr>
          <tr class="row28">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column4 style43 null"></td>
            <td class="column5 style43 null"></td>
            <td class="column6 style44 s">SUBTOTAL LESS DISCOUNT</td>
            <td class="column7 style45 f">0.00</td>
            <td class="column8 style46 null"></td>
          </tr>
          <tr class="row29">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column4 style43 null"></td>
            <td class="column5 style43 null"></td>
            <td class="column6 style47 s">TAX RATE</td>
            <td class="column7 style48 n">0.00%</td>
            <td class="column8 style49 null"></td>
          </tr>
          <tr class="row30">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column4 style43 null"></td>
            <td class="column5 style43 null"></td>
            <td class="column6 style44 s">TOTAL TAX</td>
            <td class="column7 style45 f">0.00</td>
            <td class="column8 style46 null"></td>
          </tr>
          <tr class="row31">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column4 style43 null"></td>
            <td class="column5 style43 null"></td>
            <td class="column6 style44 s">SHIPPING/HANDLING</td>
            <td class="column7 style50 n">0.00</td>
            <td class="column8 style51 null"></td>
          </tr>
          <tr class="row32">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style83 null style62" colspan="2"></td>
            <td class="column4 style43 null"></td>
            <td class="column5 style43 null"></td>
            <td class="column6 style52 s">Balance Due</td>
            <td class="column7 style53 f">0</td>
            <td class="column8 style54 null"></td>
          </tr>
          <tr class="row33">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style87 null style62" colspan="6"></td>
            <td class="column8 style55 null"></td>
          </tr>
          <tr class="row34">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style56 s">Terms &amp; Instructions</td>
            <td class="column3 style55 null"></td>
            <td class="column4 style55 null"></td>
            <td class="column5 style55 null"></td>
            <td class="column6 style55 null"></td>
            <td class="column7 style55 null"></td>
            <td class="column8 style55 null"></td>
          </tr>
          <tr class="row35">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style85 s style62" colspan="6">&lt;Add payment instructions here, e.g: bank, paypal...&gt;</td>
            <td class="column8 style57 null"></td>
          </tr>
          <tr class="row36">
            <td class="column0 style6 null"></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style85 s style62" colspan="6">&lt;Add terms here, e.g: warranty, returns policy...&gt;</td>
            <td class="column8 style58 null"></td>
          </tr>
          <tr class="row37">
            <td class="column0 style59 null"></td>
            <td class="column1 style59 null"></td>
            <td class="column2 style86 null style62" colspan="6"></td>
            <td class="column8 style60 null"></td>
          </tr>
          <tr class="row38">
            <td class="column0 style6 null"></td>
            <td class="column1 style6 null"></td>
            <td class="column2 style6 null"></td>
            <td class="column3 style6 null"></td>
            <td class="column4 style6 null"></td>
            <td class="column5 style6 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style6 null"></td>
            <td class="column8 style6 null"></td>
          </tr>
        </tbody>
    </table>
  </body>
</html>