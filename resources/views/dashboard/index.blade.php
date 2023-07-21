<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h5>Dashboard
                <span class="float-right">
                    Welcome <em>{{ auth()->user()->name }}</em>!
                </span>
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p>{{ __('Total Clients') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-top"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <p>{{ __('Total Users') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-top"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <p>{{ __('Total Product') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-top"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <p>{{ __('Total Service') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-top"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
