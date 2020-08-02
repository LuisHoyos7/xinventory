@extends('layouts.app')

@section('content')
    <!--begin::Dashboard-->
    <!--begin::Row-->
    <div class="row">
        <div class="col-md-10 offset-1 col-xxl-4">
            <!--begin::Mixed Widget 1-->
            <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 bg-danger py-5">
                    <h3 class="card-title font-weight-bolder text-white">Ventas Mensuales</h3>
                    <div class="card-toolbar">
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header pb-1">
                                        <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-shopping-cart-1"></i>
                                            </span>
                                            <span class="navi-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-calendar-8"></i>
                                            </span>
                                            <span class="navi-text">Event</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-graph-1"></i>
                                            </span>
                                            <span class="navi-text">Report</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Post</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-writing"></i>
                                            </span>
                                            <span class="navi-text">File</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0 position-relative overflow-hidden">
                    <!--begin::Chart-->
                    <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px; min-height: 200px;"><div id="apexchartsk73mb8nz" class="apexcharts-canvas apexchartsk73mb8nz apexcharts-theme-light" style="width: 566px; height: 200px;"><svg id="SvgjsSvg1164" width="566" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1166" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1165"><clipPath id="gridRectMaskk73mb8nz"><rect id="SvgjsRect1169" width="573" height="203" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskk73mb8nz"><rect id="SvgjsRect1170" width="570" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1176" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1177" flood-color="#d13647" flood-opacity="0.5" result="SvgjsFeFlood1177Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1178" in="SvgjsFeFlood1177Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1178Out"></feComposite><feOffset id="SvgjsFeOffset1179" dx="0" dy="5" result="SvgjsFeOffset1179Out" in="SvgjsFeComposite1178Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1180" stdDeviation="3 " result="SvgjsFeGaussianBlur1180Out" in="SvgjsFeOffset1179Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1181" result="SvgjsFeMerge1181Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1182" in="SvgjsFeGaussianBlur1180Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1183" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1184" in="SourceGraphic" in2="SvgjsFeMerge1181Out" mode="normal" result="SvgjsFeBlend1184Out"></feBlend></filter><filter id="SvgjsFilter1186" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1187" flood-color="#d13647" flood-opacity="0.5" result="SvgjsFeFlood1187Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1188" in="SvgjsFeFlood1187Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1188Out"></feComposite><feOffset id="SvgjsFeOffset1189" dx="0" dy="5" result="SvgjsFeOffset1189Out" in="SvgjsFeComposite1188Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1190" stdDeviation="3 " result="SvgjsFeGaussianBlur1190Out" in="SvgjsFeOffset1189Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1191" result="SvgjsFeMerge1191Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1192" in="SvgjsFeGaussianBlur1190Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1193" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1194" in="SourceGraphic" in2="SvgjsFeMerge1191Out" mode="normal" result="SvgjsFeBlend1194Out"></feBlend></filter></defs><g id="SvgjsG1195" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1196" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1198" class="apexcharts-grid"><g id="SvgjsG1199" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1201" x1="0" y1="0" x2="566" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1202" x1="0" y1="20" x2="566" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1203" x1="0" y1="40" x2="566" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1204" x1="0" y1="60" x2="566" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1205" x1="0" y1="80" x2="566" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1206" x1="0" y1="100" x2="566" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1207" x1="0" y1="120" x2="566" y2="120" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1208" x1="0" y1="140" x2="566" y2="140" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1209" x1="0" y1="160" x2="566" y2="160" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1210" x1="0" y1="180" x2="566" y2="180" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1211" x1="0" y1="200" x2="566" y2="200" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1200" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1213" x1="0" y1="200" x2="566" y2="200" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1212" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1171" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1172" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1175" d="M 0 200L 0 125C 33.016666666666666 125 61.31666666666666 87.5 94.33333333333333 87.5C 127.35 87.5 155.64999999999998 120 188.66666666666666 120C 221.68333333333334 120 249.98333333333335 25 283 25C 316.01666666666665 25 344.31666666666666 100 377.3333333333333 100C 410.34999999999997 100 438.65 100 471.66666666666663 100C 504.6833333333333 100 532.9833333333333 100 566 100C 566 100 566 100 566 200M 566 100z" fill="transparent" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk73mb8nz)" filter="url(#SvgjsFilter1176)" pathTo="M 0 200L 0 125C 33.016666666666666 125 61.31666666666666 87.5 94.33333333333333 87.5C 127.35 87.5 155.64999999999998 120 188.66666666666666 120C 221.68333333333334 120 249.98333333333335 25 283 25C 316.01666666666665 25 344.31666666666666 100 377.3333333333333 100C 410.34999999999997 100 438.65 100 471.66666666666663 100C 504.6833333333333 100 532.9833333333333 100 566 100C 566 100 566 100 566 200M 566 100z" pathFrom="M -1 200L -1 200L 94.33333333333333 200L 188.66666666666666 200L 283 200L 377.3333333333333 200L 471.66666666666663 200L 566 200"></path><path id="SvgjsPath1185" d="M 0 125C 33.016666666666666 125 61.31666666666666 87.5 94.33333333333333 87.5C 127.35 87.5 155.64999999999998 120 188.66666666666666 120C 221.68333333333334 120 249.98333333333335 25 283 25C 316.01666666666665 25 344.31666666666666 100 377.3333333333333 100C 410.34999999999997 100 438.65 100 471.66666666666663 100C 504.6833333333333 100 532.9833333333333 100 566 100" fill="none" fill-opacity="1" stroke="#d13647" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk73mb8nz)" filter="url(#SvgjsFilter1186)" pathTo="M 0 125C 33.016666666666666 125 61.31666666666666 87.5 94.33333333333333 87.5C 127.35 87.5 155.64999999999998 120 188.66666666666666 120C 221.68333333333334 120 249.98333333333335 25 283 25C 316.01666666666665 25 344.31666666666666 100 377.3333333333333 100C 410.34999999999997 100 438.65 100 471.66666666666663 100C 504.6833333333333 100 532.9833333333333 100 566 100" pathFrom="M -1 200L -1 200L 94.33333333333333 200L 188.66666666666666 200L 283 200L 377.3333333333333 200L 471.66666666666663 200L 566 200"></path><g id="SvgjsG1173" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1219" r="0" cx="0" cy="0" class="apexcharts-marker wp23cepn5 no-pointer-events" stroke="#d13647" fill="#ffe2e5" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1174" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1214" x1="0" y1="0" x2="566" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1215" x1="0" y1="0" x2="566" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1216" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1217" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1218" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1197" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1167" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: transparent;"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    <!--end::Chart-->
                    <!--begin::Stats-->
                    <div class="card-spacer mt-n25">
                        <!--begin::Row-->
                        <div class="row m-0">
                            <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="text-warning font-weight-bold font-size-h6">Clientes 115</a>
                            </div>
                            <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">Ventas hoy $1,250.000</a>
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row m-0">
                            <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Facturas por cobrar $2,000.000</a>
                            </div>
                            <div class="col bg-light-success px-6 py-8 rounded-xl">
                                <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"></path>
                                            <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Articulos 525</a>
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 567px; height: 429px;"></div></div><div class="contract-trigger"></div></div></div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 1-->
        </div>
    </div>
    <!--end::Row-->
@endsection
