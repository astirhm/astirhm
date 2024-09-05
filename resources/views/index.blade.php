<h1>cart</h1>
<ul>
    @foreach ($cart as $item)
    <li>
        {{$item->product->name}}({{$item->quantity}})
        <form action="{{route('cart.destroy',$item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Remove</button>
        </form>
    </li>
    @endforeach
</ul>
<form action="{{route('cart.store')}}" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{$product->id}}">
    <button type="submit">Add to cart</button>
    <div class="container">
        <h1 class="mb-4">cart</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>product</th>
                    <th>quantity</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item )
                <tr>
                    <td>{{$item->product->name}}</td>
                    <td>{{$item->quantity}}</td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </div>
</form>
