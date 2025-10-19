@extends('backend.app')
@push('css')

@endpush

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">overview</h2>
                    <button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>add item</button>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2>10368</h2>
                                <span>members online</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                            <div class="text">
                                <h2>388,688</h2>
                                <span>items solid</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                            <div class="text">
                                <h2>1,086</h2>
                                <span>this week</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                            <div class="text">
                                <h2>$1,060,386</h2>
                                <span>total earnings</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-9">
                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>date</th>
                                <th>order ID</th>
                                <th>name</th>
                                <th class="text-end">price</th>
                                <th class="text-end">quantity</th>
                                <th class="text-end">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2025-01-15 14:32</td>
                                <td>100398</td>
                                <td>iPhone 17 128GB Titanium</td>
                                <td class="text-end">$1299.00</td>
                                <td class="text-end">1</td>
                                <td class="text-end">$999.00</td>
                            </tr>
                            <tr>
                                <td>2025-01-14 10:18</td>
                                <td>100397</td>
                                <td>Samsung Galaxy S25 Ultra</td>
                                <td class="text-end">$1199.00</td>
                                <td class="text-end">1</td>
                                <td class="text-end">$756.00</td>
                            </tr>
                            <tr>
                                <td>2025-01-13 16:45</td>
                                <td>100396</td>
                                <td>PS5 Pro DualSense Controller</td>
                                <td class="text-end">$79.00</td>
                                <td class="text-end">2</td>
                                <td class="text-end">$44.00</td>
                            </tr>
                            <tr>
                                <td>2025-01-12 09:23</td>
                                <td>100395</td>
                                <td>iPhone 17 Pro Max 1TB Space Black</td>
                                <td class="text-end">$1699.00</td>
                                <td class="text-end">1</td>
                                <td class="text-end">$1199.00</td>
                            </tr>
                            <tr>
                                <td>2025-01-11 13:17</td>
                                <td>100393</td>
                                <td>USB-C to USB-C Thunderbolt 5 Cable</td>
                                <td class="text-end">$29.00</td>
                                <td class="text-end">3</td>
                                <td class="text-end">$30.00</td>
                            </tr>
                            <tr>
                                <td>2025-01-10 11:55</td>
                                <td>100392</td>
                                <td>Apple Watch Series 11 Ultra</td>
                                <td class="text-end">$899.00</td>
                                <td class="text-end">6</td>
                                <td class="text-end">$1494.00</td>
                            </tr>
                            <tr>
                                <td>2025-01-09 15:42</td>
                                <td>100391</td>
                                <td>Sony A7R VI Mirrorless Camera</td>
                                <td class="text-end">$3899.00</td>
                                <td class="text-end">1</td>
                                <td class="text-end">$699.00</td>
                            </tr>
                            <tr>
                                <td>2025-01-08 08:29</td>
                                <td>100393</td>
                                <td>USB-C to Lightning Cable 2m</td>
                                <td class="text-end">$19.00</td>
                                <td class="text-end">3</td>
                                <td class="text-end">$30.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3">
                <h2 class="title-1 m-b-25">Top countries</h2>
                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                    <div class="au-card-inner">
                        <div class="table-responsive">
                            <table class="table table-top-countries">
                                <tbody>
                                    <tr>
                                        <td>United States</td>
                                        <td class="text-end">$119,366.96</td>
                                    </tr>
                                    <tr>
                                        <td>Australia</td>
                                        <td class="text-end">$70,261.65</td>
                                    </tr>
                                    <tr>
                                        <td>United Kingdom</td>
                                        <td class="text-end">$46,399.22</td>
                                    </tr>
                                    <tr>
                                        <td>Turkey</td>
                                        <td class="text-end">$35,364.90</td>
                                    </tr>
                                    <tr>
                                        <td>Germany</td>
                                        <td class="text-end">$20,366.96</td>
                                    </tr>
                                    <tr>
                                        <td>France</td>
                                        <td class="text-end">$10,366.96</td>
                                    </tr>
                                    <tr>
                                        <td>Australia</td>
                                        <td class="text-end">$5,366.96</td>
                                    </tr>
                                    <tr>
                                        <td>Italy</td>
                                        <td class="text-end">$1639.32</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2025 Colorlib. All rights reserved. Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush