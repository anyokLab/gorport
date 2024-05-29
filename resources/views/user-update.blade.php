<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Обновление записи')}}
        </h2>
    </x-slot>
    <form action="{{route('user-update-submit', $data->id)}}" class="max-w-7x1 mx-auto sm:px-6 lg:px-8 mt-8" method="post">
    @csrf

    <div class="form-group pt-2">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Your name" id="name" class="form-control">
    </div>

    <div class="form-group pt-2">
        <label for="name">E-mail</label>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Your e-mail" id="email" class="form-control">
    </div>

    <div class="form-group pt-2">
        <label for="subject">Subject</label>
        <input type="text" name="subject" value="{{$data->subject}}" placeholder="Subject of the message" id="subject" class="form-control">
    </div>

    <div class="form-group pt-2">
        <label for="message">Message</label>
        <textarea type="text" name="message" placeholder="Your message" id="message" class="form-control">{{$data->message}}</textarea>
    </div>

    <button type="submit" class="btn btn-success mt-2">Обновить</button>
    
    </form>
</x-app-layout>