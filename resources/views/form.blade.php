@extends('welcome')

@section('header')
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<style>
    body {
        
    }
</style>

@endsection

@section('content')
    <main class="h-screen w-full bg-blue-500 p-16">
        <form class="w-full h-1/4 border-2 border-white" method="POST" action="{{ route('post.org') }}">
            @csrf
            <h1>ADD FORM</h1>
            <label for="participant"></label>
            <select name="participant">
                @foreach ($participants as $participant)
                <option value="{{ $participant['id'] }}">{{ $participant['name'] }}</option>
                @endforeach
              </select>
            <label for="org"></label>
            <select name="org">
                @foreach ($organizations as $organization)
                    <option value="{{ $organization['id'] }}">{{ $organization['name'] }}</option>
                @endforeach
            
              </select>

              <button type="submit" class="bg-white">SUBMITT</button>
        </form>
        <form class="w-full h-1/4 border-2 border-white" method="POST" action="{{ route('update.org') }}">
            @csrf
            <h1>UPDATE FORM</h1>
            <label for="id"></label>
            <select name="id">
                @foreach ($participants as $participant)
                <option value="{{ $participant['id'] }}">{{ $participant['name'] }}</option>
                @endforeach
              </select>
            <label for="new_name"></label>
            <input name="new_name" type="text" class="border-slate-500 border-2">

              <button type="submit" class="bg-white">SUBMITT</button>
        </form>

        <form class="flex flex-col w-full h-1/2 border-2 border-white" method="POST" action="{{ route('post.participant') }}">
            @csrf
            <label for="name">name</label>
            <input class="m-8 border-2 border-slate-500" type="text" name="name" value="{{ old('name') }}">
            <label for="personality">personality</label>
            <textarea class="m-8 border-2 border-slate-500" name="personality" id="" cols="30" rows="10" >{{ old('personality') }}</textarea>

            <button type="submit" class="bg-white">SUBMITT</button>
        </form>
    </main>
@endsection

@section('script')

@endsection