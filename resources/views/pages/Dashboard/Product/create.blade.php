<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Product &raquo; Create
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                            Ada yang salah hmmmm
                        </div>
                        <div class="px-4 py-5 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b ">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form action="{{ route('dashboard.product.store') }}" class="w-full " method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap mb-6 -mx-3 ">
                        <div class="w-full px-3 mt-3 mb-6">
                            <label
                                class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase ">Name</label>
                            <input type="text" value="{{ old('nama') }}" name="name"
                                class="block w-full px-4 py-3 text-gray-700 bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:bg-gray-500"
                                placeholder="Product Name">
                        </div>
                        <div class="w-full px-3 mt-3 mb-6">
                            <label
                                class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase ">Description</label>
                            <textarea name="description"
                                class="block w-full px-4 py-3 text-gray-700 bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:bg-gray-500">
                                {!! old('description') !!}
                            </textarea>
                        </div>
                        <div class="w-full px-3 mt-3 mb-6">
                            <label
                                class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase ">Price</label>
                            <input type="number" value="{{ old('price') }}" name="price"
                                class="block w-full px-4 py-3 text-gray-700 bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:bg-gray-500"
                                placeholder="Product Price">
                        </div>
                        <div class="w-full px-3 mt-3 mb-6">
                            <div class="w-full px-3">
                                <button type="submit"
                                    class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">Submit
                                    Product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</x-app-layout>
