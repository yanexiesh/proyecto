@extends('layouts.app')

@section('header')
	<style type="text/css">
		
        .select{
            font-size: 16px;
            outline: none;
            margin-top: 0;
        }
        
        
	</style>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="wrap justify-content-center">
			<div class="row">
				<div class="col-md-4" >
                    <p style="color: black">Listado de Productos </p>
                </div>                
            </div>
                
			<div class="row">
				<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">nombre</th>
                            <th scope="col">Slug</th>
                            <th scope="col">precio</th>
                            <th scope="col">shopping</th>
                            <th scope="col">imagen</th>
                            <th scope="col" class="Action">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($productos as $product )
                            <tr>                                
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->shipping_cost}}</td>
                                <td><img src="/images/{{ $product->image_path }}"
                                    class="card-img-top mx-auto"
                                    style="height: 75px; width: 75px;display: block;"
                                    alt="{{ $product->image_path }}"
                               ></td>
                                <th>
                                    <a href="" class="a-edit btn  btn-danger">Editar</a>
                                </th>
                            </tr>
                        @endforeach    
                    </tbody>
                </table>
                {{-- {!! $estudents->render() !!} --}}
                
			</div>
		</div>
    </div>
@endsection
@section('scripts')
    
@endsection