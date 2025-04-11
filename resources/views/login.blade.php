@extends('layouts.main_layout')
@section("content")


  <div class="flex items-center justify-center min-h-screen bg-gray-900">
    <div class="w-full max-w-md">
    <form action="/loginSubmit" method="POST" class="bg-gray-800 shadow-lg rounded px-8 pt-6 pb-8 mb-4">
     @csrf
      <h2 class="text-2xl font-bold text-white mb-6 text-center">Login</h2>

      <div class="mb-4">
      <label class="block text-white text-sm font-semibold mb-2" for="email" >Email</label>

      <input
        class="w-full px-3 py-2 bg-gray-700 text-white rounded border border-gray-600 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 transition"
        id="email" type="email" name="email" placeholder="you@example.com" value="{{ old('email') }}"  >
   
      @error('email')
        <div class="text-red-500 text-sm mb-2">
          {{ $message }}
        </div>
      @enderror
    </div>

      <div class="mb-6">
      <label class="block text-white text-sm font-semibold mb-2" for="password" >Password</label>
      <input
        class="w-full px-3 py-2 bg-gray-700 text-white rounded border border-gray-600 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 transition"
        id="password" type="password" name="password" placeholder="********"  value="{{ old('password') }}" >
        @error('password')
        <div class="text-red-500 text-sm mb-2">
          {{ $message }}
        </div>
      @enderror
      </div>
   

      <div class="flex items-center justify-between">
      <button type="submit"
        class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-teal-500 transition">
        LOGIN
      </button>
      <a href="#" class="inline-block align-baseline font-bold text-sm text-teal-400 hover:text-teal-600">
        Forgot Password?
      </a>
      </div>
    </form>


    <p class="text-center text-gray-500 text-xs">
      &copy;2025 All rights reserved.
    </p>
    </div>
  </div>
@endsection