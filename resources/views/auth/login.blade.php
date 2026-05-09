<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5">Accedi

                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 col-md-6">
<form class="bg-secondary-subtle shadow roundend p-5" action="{{route('login')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="loginEmail" class="form-label">Indirizzo email</label>
        <input type="email" class="form-controll" id="loginEmail" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-controll" id="password" name="password">
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-dark">Accedi</button>
    </div>
</form>
            </div>
        </div>
    </div>
</x-layout>