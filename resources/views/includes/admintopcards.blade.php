<div class="row mt-5">
    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="row card-body">
                <div class="col-6">
                    <div class="avatar-lg rounded bg-soft-primary">
                        <i class="dripicons-wallet font-24 avatar-title text-primary"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                        <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="row card-body">
                <div class="col-6">
                    <div class="avatar-lg rounded bg-soft-success">
                        <i class="dripicons-basket font-24 avatar-title text-success"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup">1,845</span></h3>
                        <p class="text-muted mb-1 text-truncate">Orders</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="row card-body">
                <div class="col-6">
                    <div class="avatar-lg rounded bg-soft-info">
                        <i class="dripicons-store font-24 avatar-title text-info"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup">{{count(\App\Product::all())}}</span></h3>
                        <p class="text-muted mb-1 text-truncate">Products</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="row card-body">
                <div class="col-6">
                    <div class="avatar-lg rounded bg-soft-warning">
                        <i class="dripicons-user-group font-24 avatar-title text-warning"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup">{{count(\App\User::all())}}</span></h3>
                        <p class="text-muted mb-1 text-truncate">Users</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
</div>
