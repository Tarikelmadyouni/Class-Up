<h1>Update this customer</h1>

<form  action="/customers/{{$customer->id}}" method="post">

    @method('PATCH')



    @include('customer.form')

    <button type="submit">Save modification</button>



</form>

