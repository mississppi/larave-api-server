@extends('layouts.app')
<div class="d-flex flex-row w-100" style="height: 100%">
    <nav id="sidebar" >
        @include('layouts.partials.sidebar')
    </nav>
    
    <main class="w-100 bg-light">
        @include('layouts.partials.main')
    </main>
</div>