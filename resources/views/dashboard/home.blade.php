@extends('layouts.dashboard_app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">آمار ایمیل ها</h4>
                        <p class="category">تاریخ آخرین عملکرد کمپین</p>
                    </div>
                    <div class="content">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-pie" style="width: 100%; height: 100%;"><g class="ct-series ct-series-c"><path d="M142.5,5A117.5,117.5,0,0,0,98.864,13.403L142.5,122.5Z" class="ct-slice-pie" ct:value="6"></path></g><g class="ct-series ct-series-b"><path d="M99.245,13.251A117.5,117.5,0,0,0,62.365,208.434L142.5,122.5Z" class="ct-slice-pie" ct:value="32"></path></g><g class="ct-series ct-series-a"><path d="M62.066,208.154A117.5,117.5,0,1,0,142.5,5L142.5,122.5Z" class="ct-slice-pie" ct:value="62"></path></g><g><text dx="197.12436854593477" dy="144.12731747022482" text-anchor="middle" class="ct-label">62%</text><text dx="84.79062401968952" dy="111.49134776808874" text-anchor="middle" class="ct-label">32%</text><text dx="131.49134776808862" dy="64.79062401968955" text-anchor="middle" class="ct-label">6%</text></g></svg></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> بازکردن
                                <i class="fa fa-circle text-danger"></i> پرش
                                <i class="fa fa-circle text-warning"></i> لغو اشتراک
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> کمپین فرستاده شده 2 روز پیش
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">رفتار کاربران</h4>
                        <p class="category">عملکرد 24 ساعت قبل</p>
                    </div>
                    <div class="content">
                        <div id="chartHours" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="245px" class="ct-chart-line" style="width: 100%; height: 245px;"><g class="ct-grids"><line y1="210" y2="210" x1="50" x2="614" class="ct-grid ct-vertical"></line><line y1="185.625" y2="185.625" x1="50" x2="614" class="ct-grid ct-vertical"></line><line y1="161.25" y2="161.25" x1="50" x2="614" class="ct-grid ct-vertical"></line><line y1="136.875" y2="136.875" x1="50" x2="614" class="ct-grid ct-vertical"></line><line y1="112.5" y2="112.5" x1="50" x2="614" class="ct-grid ct-vertical"></line><line y1="88.125" y2="88.125" x1="50" x2="614" class="ct-grid ct-vertical"></line><line y1="63.75" y2="63.75" x1="50" x2="614" class="ct-grid ct-vertical"></line><line y1="39.375" y2="39.375" x1="50" x2="614" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="614" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,210L50,140.044C73.5,140.044,97,116.156,120.5,116.156C144,116.156,167.5,90.563,191,90.563C214.5,90.563,238,90.075,261.5,90.075C285,90.075,308.5,74.963,332,74.963C355.5,74.963,379,67.163,402.5,67.163C426,67.163,449.5,39.863,473,39.863C496.5,39.863,520,40.594,543.5,40.594C567,40.594,590.5,26.7,614,26.7C637.5,26.7,661,17.925,684.5,17.925C708,17.925,731.5,3.787,755,3.787C778.5,3.787,802,-20.1,825.5,-20.1L825.5,210Z" class="ct-area" ct:values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path></g><g class="ct-series ct-series-b"><path d="M50,210L50,193.669C73.5,193.669,97,172.95,120.5,172.95C144,172.95,167.5,175.144,191,175.144C214.5,175.144,238,151.5,261.5,151.5C285,151.5,308.5,140.044,332,140.044C355.5,140.044,379,128.344,402.5,128.344C426,128.344,449.5,103.969,473,103.969C496.5,103.969,520,103.481,543.5,103.481C567,103.481,590.5,78.619,614,78.619C637.5,78.619,661,77.887,684.5,77.887C708,77.887,731.5,77.4,755,77.4C778.5,77.4,802,52.294,825.5,52.294L825.5,210Z" class="ct-area" ct:values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path></g><g class="ct-series ct-series-c"><path d="M50,210L50,204.394C73.5,204.394,97,182.456,120.5,182.456C144,182.456,167.5,193.669,191,193.669C214.5,193.669,238,183.675,261.5,183.675C285,183.675,308.5,163.688,332,163.688C355.5,163.688,379,151.744,402.5,151.744C426,151.744,449.5,135.169,473,135.169C496.5,135.169,520,134.925,543.5,134.925C567,134.925,590.5,102.994,614,102.994C637.5,102.994,661,110.063,684.5,110.063C708,110.063,731.5,110.063,755,110.063C778.5,110.063,802,85.931,825.5,85.931L825.5,210Z" class="ct-area" ct:values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="215" width="70.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 71px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">9:00AM</span></foreignObject><foreignObject style="overflow: visible;" x="120.5" y="215" width="70.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 71px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">12:00AM</span></foreignObject><foreignObject style="overflow: visible;" x="191" y="215" width="70.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 71px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">3:00PM</span></foreignObject><foreignObject style="overflow: visible;" x="261.5" y="215" width="70.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 71px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">6:00PM</span></foreignObject><foreignObject style="overflow: visible;" x="332" y="215" width="70.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 71px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">9:00PM</span></foreignObject><foreignObject style="overflow: visible;" x="402.5" y="215" width="70.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 71px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">12:00PM</span></foreignObject><foreignObject style="overflow: visible;" x="473" y="215" width="70.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 71px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">3:00AM</span></foreignObject><foreignObject style="overflow: visible;" x="543.5" y="215" width="70.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 71px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">6:00AM</span></foreignObject><foreignObject style="overflow: visible;" y="185.625" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="161.25" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">100</span></foreignObject><foreignObject style="overflow: visible;" y="136.875" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject><foreignObject style="overflow: visible;" y="112.5" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">300</span></foreignObject><foreignObject style="overflow: visible;" y="88.125" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject><foreignObject style="overflow: visible;" y="63.75" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">500</span></foreignObject><foreignObject style="overflow: visible;" y="39.375" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">700</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">800</span></foreignObject></g></svg></div>
                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> بازکردن
                                <i class="fa fa-circle text-danger"></i> کلیک
                                <i class="fa fa-circle text-warning"></i> ثانیه های کلیک کردن
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> ویرایش شده 3 دقیقه پیش
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">فروش ۱۳۹۵</h4>
                        <p class="category">همه محصولات با احتساب مالیات</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="245px" class="ct-chart-bar" style="width: 100%; height: 245px;"><g class="ct-grids"><line y1="210" y2="210" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="188.33333333333334" y2="188.33333333333334" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="166.66666666666666" y2="166.66666666666666" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="145" y2="145" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="123.33333333333333" y2="123.33333333333333" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="101.66666666666667" y2="101.66666666666667" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="80" y2="80" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="58.33333333333334" y2="58.33333333333334" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="36.66666666666666" y2="36.66666666666666" x1="50" x2="442" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="442" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="61.33333333333333" x2="61.33333333333333" y1="210" y2="92.56666666666666" class="ct-bar" ct:value="542"></line><line x1="93.99999999999999" x2="93.99999999999999" y1="210" y2="114.01666666666667" class="ct-bar" ct:value="443"></line><line x1="126.66666666666666" x2="126.66666666666666" y1="210" y2="140.66666666666669" class="ct-bar" ct:value="320"></line><line x1="159.33333333333334" x2="159.33333333333334" y1="210" y2="41" class="ct-bar" ct:value="780"></line><line x1="192" x2="192" y1="210" y2="90.18333333333334" class="ct-bar" ct:value="553"></line><line x1="224.66666666666666" x2="224.66666666666666" y1="210" y2="111.85" class="ct-bar" ct:value="453"></line><line x1="257.3333333333333" x2="257.3333333333333" y1="210" y2="139.36666666666667" class="ct-bar" ct:value="326"></line><line x1="289.99999999999994" x2="289.99999999999994" y1="210" y2="115.96666666666667" class="ct-bar" ct:value="434"></line><line x1="322.66666666666663" x2="322.66666666666663" y1="210" y2="86.93333333333334" class="ct-bar" ct:value="568"></line><line x1="355.3333333333333" x2="355.3333333333333" y1="210" y2="77.83333333333334" class="ct-bar" ct:value="610"></line><line x1="387.99999999999994" x2="387.99999999999994" y1="210" y2="46.19999999999999" class="ct-bar" ct:value="756"></line><line x1="420.66666666666663" x2="420.66666666666663" y1="210" y2="16.083333333333343" class="ct-bar" ct:value="895"></line></g><g class="ct-series ct-series-b"><line x1="71.33333333333333" x2="71.33333333333333" y1="210" y2="120.73333333333333" class="ct-bar" ct:value="412"></line><line x1="103.99999999999999" x2="103.99999999999999" y1="210" y2="157.35" class="ct-bar" ct:value="243"></line><line x1="136.66666666666666" x2="136.66666666666666" y1="210" y2="149.33333333333334" class="ct-bar" ct:value="280"></line><line x1="169.33333333333334" x2="169.33333333333334" y1="210" y2="84.33333333333333" class="ct-bar" ct:value="580"></line><line x1="202" x2="202" y1="210" y2="111.85" class="ct-bar" ct:value="453"></line><line x1="234.66666666666666" x2="234.66666666666666" y1="210" y2="133.51666666666665" class="ct-bar" ct:value="353"></line><line x1="267.3333333333333" x2="267.3333333333333" y1="210" y2="145" class="ct-bar" ct:value="300"></line><line x1="299.99999999999994" x2="299.99999999999994" y1="210" y2="131.13333333333333" class="ct-bar" ct:value="364"></line><line x1="332.66666666666663" x2="332.66666666666663" y1="210" y2="130.26666666666665" class="ct-bar" ct:value="368"></line><line x1="365.3333333333333" x2="365.3333333333333" y1="210" y2="121.16666666666667" class="ct-bar" ct:value="410"></line><line x1="397.99999999999994" x2="397.99999999999994" y1="210" y2="72.19999999999999" class="ct-bar" ct:value="636"></line><line x1="430.66666666666663" x2="430.66666666666663" y1="210" y2="59.41666666666666" class="ct-bar" ct:value="695"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="215" width="32.666666666666664" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="82.66666666666666" y="215" width="32.666666666666664" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="115.33333333333333" y="215" width="32.66666666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="148" y="215" width="32.66666666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="180.66666666666666" y="215" width="32.66666666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Mai</span></foreignObject><foreignObject style="overflow: visible;" x="213.33333333333331" y="215" width="32.666666666666686" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jun</span></foreignObject><foreignObject style="overflow: visible;" x="246" y="215" width="32.66666666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jul</span></foreignObject><foreignObject style="overflow: visible;" x="278.66666666666663" y="215" width="32.66666666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Aug</span></foreignObject><foreignObject style="overflow: visible;" x="311.3333333333333" y="215" width="32.666666666666686" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sep</span></foreignObject><foreignObject style="overflow: visible;" x="344" y="215" width="32.66666666666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Oct</span></foreignObject><foreignObject style="overflow: visible;" x="376.66666666666663" y="215" width="32.666666666666686" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Nov</span></foreignObject><foreignObject style="overflow: visible;" x="409.3333333333333" y="215" width="32.666666666666686" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 33px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Dec</span></foreignObject><foreignObject style="overflow: visible;" y="188.33333333333334" x="10" height="21.666666666666668" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="166.66666666666669" x="10" height="21.666666666666668" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">100</span></foreignObject><foreignObject style="overflow: visible;" y="145" x="10" height="21.666666666666664" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject><foreignObject style="overflow: visible;" y="123.33333333333333" x="10" height="21.66666666666667" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">300</span></foreignObject><foreignObject style="overflow: visible;" y="101.66666666666667" x="10" height="21.666666666666657" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject><foreignObject style="overflow: visible;" y="80" x="10" height="21.66666666666667" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">500</span></foreignObject><foreignObject style="overflow: visible;" y="58.33333333333334" x="10" height="21.666666666666657" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject><foreignObject style="overflow: visible;" y="36.66666666666666" x="10" height="21.666666666666686" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">700</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="21.666666666666657" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">800</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">900</span></foreignObject></g></svg></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> تسلا مدل S
                                <i class="fa fa-circle text-danger"></i> BMW سری 5
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-check"></i> اطلاعات داده ها گواهی
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">وظایف</h4>
                        <p class="category">توسعه بخش مدیریت</p>
                    </div>
                    <div class="content">
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>قرارداد برای ثبت نام "سازمان دهندگان کنفرانس ترس از چیست؟""</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox checked">
                                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            </label>
                                        </td>
                                        <td>خطوط از ادبیات بزرگ روسیه؟ و یا ایمیل از رئیس من؟</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox checked">
                                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            </label>
                                        </td>
                                        <td>آب گرفتگی: یک سال بعد، ارزیابی آنچه از دست رفته بود و زمانی که باران تخریب در نوردید مترو دیترویت چه شد
</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>درست 4 تجربه کاربر نامرئی شما هرگز نمی دانستند درباره</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>خوانده شده "زیر را می سازد متوسط بهتر"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>دنبال کردن 5 دشمنان را از توییتر</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> ویرایش شده 3 دقیقه پیش
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection