@extends('layouts.app')

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

                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="phone_number">Phone:</label>
                <input type="tel" name="phone_number" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <button type="submit">登録</button>
            </form>
        </div>
    </div>
</div>

