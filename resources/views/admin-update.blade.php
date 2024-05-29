<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Record update') }}
        </h2>
    </x-slot>

    <form action="{{route('admin-update-submit', $data->id)}}" class="max-w-7x1 mx-auto sm:px-6 1g:px-8 mt-8" method="post">
    @csrf

    <div class="form-group pt-2">
        <label for="name">Enter your name</label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Enter your name" id="name" class="form-control">
    </div>

    <div class="form-group mt-2">
        <label for="email">Enter your email</label>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Enter your email" id="email" class="form-control">
    </div>

    <div class="form-group mt-2">
        <label for="subject">Message subject</label>
        <input type="text" name="subject" value="{{$data->subject}}" placeholder="Message subject" id="subject" class="form-control">
    </div>

    <div class="form-group mt-2">
        <label for="subject">Enter your message</label>
        <textarea type="text" name="message" placeholder="Enter your message" id="message" class="form-control"> {{$data->message}} </textarea>
    </div>

    
    <input type="submit" class="btn btn-success mt-2" value="Update">
    </form>
</x-app-layout>