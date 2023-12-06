@extends('layouts.app')
<div class="row">
    <div class="col-md-3">
        @include('layouts.partials.sidebar')
    </div>
    <div class="col-md-9">
        <div class="container">
            <h2>顧客新規登録</h2>
            <form action="{{ route('customers.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone:</label>
                    <input type="tel" class="form-control" name="phone_number" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <button type="submit" class="btn btn-primary">登録</button>
            </form>
        </div>
    </div>
</div>

