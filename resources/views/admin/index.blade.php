@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
        <div class="col-12">
            <div class="card p-2 mb-2">
                <h4 class="header-title mb-3">Revenue Analytics</h4>
                <div class="row">
                    <div class="col-lg-8" dir="ltr">
                        <div class="text-center">
                            <p class="text-muted font-15 font-family-secondary mb-0">
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Desktops</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Tablets</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Mobiles</span>
                            </p>
                        </div>
                        <div id="morris-area-with-dotted" style="height: 320px;" class="morris-chart my-3 mb-lg-0"></div>
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <h5 class="mt-0">iMacs <span class="text-muted float-right">70%</span></h5>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h5 class="mt-3">iBooks <span class="text-muted float-right">39%</span></h5>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h5 class="mt-3">iPhone 5s <span class="text-muted float-right">65%</span></h5>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h5 class="mt-3">iPhone 6 <span class="text-muted float-right">92%</span></h5>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h5 class="mt-3">iPhone X <span class="text-muted float-right">38%</span></h5>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="row text-center">
                            <div class="col-6 mt-3">
                                <h3 class="font-weight-light"> <i class="mdi mdi-cloud-download text-info"></i> 79%</h3>
                                <p class="text-muted text-overflow">Per min user</p>
                            </div> <!-- end col -->
                            <div class="col-6 mt-3">
                                <h3 class="font-weight-light"> <i class="mdi mdi-cloud-upload text-danger"></i> 23%</h3>
                                <p class="text-muted text-overflow">Bounce Rate</p>
                            </div> <!-- end col -->
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div>  <!-- end card-box-->
        </div> <!-- end col -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card p-2">
                <h4 class="header-title mb-3">Transaction History</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">Name</th>
                            <th class="border-top-0">Card</th>
                            <th class="border-top-0">Date</th>
                            <th class="border-top-0">Amount</th>
                            <th class="border-top-0">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="assets/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                <span class="ml-2">Imelda J. Stanberry</span>
                            </td>
                            <td>
                                <img src="assets/images/cards/visa.png" alt="user-card" height="24" />
                                <span class="ml-2">**** 3256</span>
                            </td>
                            <td>27.03.2018</td>
                            <td>$345.98</td>
                            <td><span class="badge badge-pill badge-danger">Failed</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/images/users/user-3.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                <span class="ml-2">Francisca S. Lobb</span>
                            </td>
                            <td>
                                <img src="assets/images/cards/master.png" alt="user-card" height="24" />
                                <span class="ml-2">**** 8451</span>
                            </td>
                            <td>28.03.2018</td>
                            <td>$1,250</td>
                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/images/users/user-1.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                <span class="ml-2">James A. Wert</span>
                            </td>
                            <td>
                                <img src="assets/images/cards/amazon.png" alt="user-card" height="24" />
                                <span class="ml-2">**** 2258</span>
                            </td>
                            <td>28.03.2018</td>
                            <td>$145</td>
                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/images/users/user-4.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                <span class="ml-2">Dolores J. Pooley</span>
                            </td>
                            <td>
                                <img src="assets/images/cards/american-express.png" alt="user-card" height="24" />
                                <span class="ml-2">**** 6950</span>
                            </td>
                            <td>29.03.2018</td>
                            <td>$2,005.89</td>
                            <td><span class="badge badge-pill badge-danger">Failed</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                <span class="ml-2">Karen I. McCluskey</span>
                            </td>
                            <td>
                                <img src="assets/images/cards/discover.png" alt="user-card" height="24" />
                                <span class="ml-2">**** 0021</span>
                            </td>
                            <td>31.03.2018</td>
                            <td>$24.95</td>
                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                        </tr>

                        </tbody>
                    </table>
                </div> <!-- end table-responsive -->

            </div> <!-- end card-box-->
        </div> <!-- end col-->
        <div class="col-xl-6">
            <div class="card p-2">
                <h4 class="header-title mb-3">Recent Products</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">Product</th>
                            <th class="border-top-0">Category</th>
                            <th class="border-top-0">Added Date</th>
                            <th class="border-top-0">Amount</th>
                            <th class="border-top-0">Status</th>
                        </tr>
                        </thead>
                        <tbody>

                            @if($products)
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <img src="{{asset($product->default_image->file)}}" alt="product-pic" height="36" />
                                        </td>
                                        <td>
                                         <span class="ml-2">
                                                @foreach ($product->categories as $category)
                                                 <p class="badge badge-pill badge-success mx-1">{{$category->name}}</p>
                                             @endforeach
                                            </span>
                                        </td>
                                        <td>{{$product->created_at}}</td>
                                        <td>€{{$product->price}}</td>
                                        <td>
                                            @if($product->deleted_at != null)
                                                <span class="badge bg-soft-danger text-success shadow-none">Not-Active</span>
                                            @else
                                                <span class="badge bg-soft-success text-success shadow-none">Active</span>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div> <!-- end table-responsive -->
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
@endsection
