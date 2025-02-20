@extends('base')
@section('title', 'i cooked')
<div>
    
    {{-- mao ni ang table na mo show sa mga list of students --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $std)
            <tr>
                <th scope="row">{{ $std -> id }}</th>
                <td>{{ $std -> name }}</td>
                <td>{{ $std -> age }}</td>
                <td>{{ $std -> gender }}</td>
                <td>{{ $std -> address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- table for adding students --}}

    <form method="POST" action="{{ route('std.createNew') }}">
        @csrf
        <h2>add students</h2>
        <div>
          <label>name</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}">
          @error('name')
          <span class="text-danger">{{ $message }}</span>
          @enderror          
        </div>
        <div>
          <label>age</label>
          <input type="number" id="age" name="age" value="{{ old('age') }}">
          @error('age')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div>
            <label>gender</label>
            <input type="text" id="gender" name="gender" value="{{ old('gender') }}">
            @error('gender')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label>address</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}">
            @error('address')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        <button type="submit">Submit</button>
      </form>
   
</div>