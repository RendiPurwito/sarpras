@extends('layout.main')
@section('title', 'Table Data Barang')
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Country</th>
                <th scope="col">ZIP</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>John</td>
                <td>Doe</td>
                <td>jhon@email.com</td>
                <td>USA</td>
                <td>123</td>
                <td>Member</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>mark@email.com</td>
                <td>UK</td>
                <td>456</td>
                <td>Member</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>jacob@email.com</td>
                <td>AU</td>
                <td>789</td>
                <td>Member</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection