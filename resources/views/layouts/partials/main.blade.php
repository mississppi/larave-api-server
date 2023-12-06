<div>
    <div class="fs-4 fw-bold">Dashboard</div>
        <div class="row">
        <div class="col-12 mb-4 mb-lg-0">
            <div class="card">
                <h5 class="card-header">customer一覧</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">name</th>
                                <th scope="col">phone</th>
                                <th scope="col">email</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                    <th scope="row">{{$customer->name}}</th>
                                    <td>{{$customer->phone_number}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                    </div>
                        <!-- <a href="#" class="btn btn-block btn-light">View all</a> -->
                </div>
            </div>
        </div>
    </div>
</div>