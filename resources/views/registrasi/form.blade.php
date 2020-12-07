@extends('tema.master')

@section("content")

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
    </ul>
</div>
@endif

<form action ="{{ route('registrasi_proses') }}" method="POST">

    @csrf

    Username <input type="text" name="username">
    Password <input type="password" name="password">
    Retype Password <input type="password" name="password_confirmation">
    Pekerjaan <select name="pekerjaan">
        <option value="guru">Guru</option>
        <option value="dosen">Dosen</option>
        <option>None</option>
    </select>
    Umur <input type="number" name="umur">
    <button type="submit">Registrasi</button>


</form>
@endsection