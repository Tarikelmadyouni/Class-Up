<h1>Add new customer</h1>

<form action="/customers" method="post">

    <div>
            <label for="name">Name</label>
            <input type="text" name="name" autocomplete="off" value="{{old('name') ?? $customer->name}}">
            @error('name')<p>{{$message}}</p>@enderror
            </div>
            <div>
            <label for="email">Email</label>
            <input type="text" name="email" autocomplete="off" value="{{old('email') ?? $customer->email}}">
            @error('email')<p>{{$message}}</p>@enderror
            </div>
        @csrf

<button>Add new customer</button>
</form>
