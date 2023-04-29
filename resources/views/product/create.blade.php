
@extends('layouts.app')
@section('content')
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Product') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/products" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="productName" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                                <div class="col-md-6">
                                    <input id="productName" type="text" class="form-control @error('productName') is-invalid @enderror" name="productName" value="{{ old('productName') }}" required autocomplete="productName" autofocus>

                                    @error('productName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="productCategory" class="col-md-4 col-form-label text-md-right">{{ __('Product Category') }}</label>

                                <div class="col-md-6">
                                    <input id="productCategory" type="text" class="form-control @error('productCategory') is-invalid @enderror" name="productCategory" value="{{ old('productCategory') }}" required autocomplete="productCategory">

                                    @error('productCategory')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">{{ old('description') }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                                <div class="col-md-6">
                                    <input id="image_path" type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path" accept="image/*">

                                    @error('image_path')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6">{{ __('Create Product') }}</h1>

                <form method="POST" action="/products" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="productName" class="block text-gray-700 font-bold mb-2">{{ __('Product Name') }}</label>
                        <input id="productName" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('productName') border-red-500 @enderror" name="productName" value="{{ old('productName') }}" required autocomplete="productName" autofocus>
                        
                        @error('productName')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                        <div class="mb-4">
                        <label for="productCategory" class="block text-gray-700 font-bold mb-2">{{ __('Product Category') }}</label>
                    <select id="productCategory" class="form-control @error('productCategory') is-invalid @enderror" name="productCategory" required autocomplete="productCategory">
                        <option value="">Choose a category</option>
                        <option value="ELECTRONIC" {{ old('productCategory') == 'ELECTRONIC' ? 'selected' : '' }}>ELECTRONIC</option>
                        <option value="BOOK" {{ old('productCategory') == 'BOOK' ? 'selected' : '' }}>BOOK</option>
                        <option value="FURNITURE" {{ old('productCategory') == 'FURNITURE' ? 'selected' : '' }}>FURNITURE</option>
                    </select>
                        
                        @error('productCategory')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">{{ __('Description') }}</label>
                        <textarea id="description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror" name="description" required autocomplete="description">{{ old('description') }}</textarea>
                        
                        @error('description')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image_path" class="block text-gray-700 font-bold mb-2">{{ __('Image') }}</label>
                        <input id="image_path" type="file" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image_path') border-red-500 @enderror" name="image_path" accept="image/*">
                        
                        @error('image_path')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Create') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
