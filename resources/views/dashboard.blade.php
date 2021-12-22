<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <form action="{{route('filter')}}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="">Filter By</label>
                                    <select name="filter_by" id="" class="form-control" required>
                                        <option value="" hidden selected>Select filter type</option>
                                        <option value="1">Gender</option>
                                        <option value="2">Family Type</option>
                                        <option value="3">Manglik</option>
                                        <option value="4">DOB</option>
                                        <option value="5">Income Range</option>
                                        <option value="6">Occupation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                                <input type="text" name="searchValue" required class="form-control mt-2 rounded" placeholder="Enter the filter value:" >
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-4">
                                <input type="submit" value="Filter" class="btn btn-outline-dark mt-2 w-100">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body" style="overflow: visible;">
                                <h6 class="header-title pl-3">Users List:</h6>
                                <table id="table" class="table table-bordered table-hover active" cellspacing="0" width="100%">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>SI No</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Data of Birth</th>
                                            <th>Gender</th>
                                            <th>Annual Income</th>
                                            <th>Occupation</th>
                                            <th>Family Type</th>
                                            <th>Manglik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d )
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$d->name}}</td>
                                                <td>{{$d->last_name}}</td>
                                                <td>{{$d->email}}</td>
                                                <td>{{$d->dob}}</td>
                                                <td>{{$d->gender}}</td>
                                                <td>{{$d->annual_income}}</td>
                                                <td>{{$d->occupation}}</td>
                                                <td>{{$d->family_type}}</td>
                                                <td>{{$d->manglik}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$data->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</x-app-layout>