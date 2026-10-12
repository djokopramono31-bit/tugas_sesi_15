<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MyShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

    <header class="flex justify-between items-center px-10 py-5 bg-white border-b">
        <a href="/products" class="font-bold text-lg">My Shop</a>
        <div class="flex gap-6 text-sm text-gray-700">
            <a href="/products" class="hover:text-black">Home</a>
            <a href="/products" class="hover:text-black">Products</a>
            <a href="#" class="hover:text-black">Cart</a>
            <a href="/login" class="hover:text-black">Log in</a>
            <a href="/register" class="hover:text-black">Register</a>
        </div>
    </header>

    <div class="bg-[#f2f0f0] py-14 text-center">
        <h1 class="text-3xl font-bold text-gray-800">Selamat datang di MyShop</h1>
        <p class="text-gray-500 mt-2 text-sm">Temukan produk terbaik dengan harga terbaik!</p>
    </div>

    <div class="max-w-6xl mx-auto px-10 py-10">
        <h2 class="text-center font-semibold mb-8">Produk Kami</h2>
        
        <div class="grid grid-cols-3 gap-6">
            @foreach($products as $product)
            <div class="border rounded-lg overflow-hidden bg-white shadow-sm">
                @if(Str::contains(strtolower($product->name), 'laptop'))
                    <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500" class="w-full h-64 object-cover">
                @elseif(Str::contains(strtolower($product->name), 'aksesor') || Str::contains(strtolower($product->name), 'acces') || Str::contains(strtolower($product->name), 'mouse'))
                    <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?w=500" class="w-full h-64 object-cover">
                @elseif(Str::contains(strtolower($product->name), 'buku') || Str::contains(strtolower($product->name), 'laravel') || Str::contains(strtolower($product->name), 'book'))
                    <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=500" class="w-full h-64 object-cover">
                @elseif(Str::contains(strtolower($product->name), 'seblak'))
                    <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=500" class="w-full h-64 object-cover">
                @else
                    <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=500" class="w-full h-64 object-cover">
                @endif
                <div class="p-4 text-center">
                    <p class="font-medium text-sm">{{ $product->name }}</p>
                    <p class="text-sm text-gray-600 mt-1">Rp. {{ number_format($product->price,0,',','.') }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-8 flex justify-center">
            {{ $products->links() }}
        </div>
    </div>

</body>
</html>