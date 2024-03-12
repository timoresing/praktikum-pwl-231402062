@extends('layouts.layout')

@section('content')


{{-- content --}}
<div class="flex justify-center mt-10 flex-col gap-10">
  {{-- input bar --}}
  <label class="form-control w-full max-w-lg mx-auto">
    <div class="label">
      <span class="label-text text-emerald-600">New Task</span>
    </div>
    <input type="text" placeholder="Type here" class="input input-bordered input-success w-full max-w-lg" />
    <div class="label">
    </div>
    {{-- button add --}}
    <button class="btn btn-success w-36 self-center rounded-full">Add</button>
    {{-- akhir button add --}}
  </label>
  {{-- akhir input bar --}}

  {{-- task --}}
  <div class="flex flex-col gap-3">
    {{-- task 1 --}}
    <div role="alert" class="alert max-w-4xl mx-auto">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
      <div class="flex flex-col">
        <span class="text-sm text-slate-400">22-03-2022</span>
        <span class="text-xl font-bold">{{ $task1 }}</span>
      </div>
      <div>
        <div class="tooltip" data-tip="Detail">
          <button class="btn btn-sm shadow-lg bg-base-200 rounded-full">View</button>
        </div>
        <div class="tooltip" data-tip="Edit">
          <button class="btn btn-sm shadow-lg bg-yellow-500 rounded-full">Edit</button>
        </div>
        <div class="tooltip" data-tip="Selesai">
          <button class="btn btn-sm btn-success rounded-full">Done</button>
        </div>
      </div>
    </div>
    {{-- akhir task 1 --}}
    {{-- task 2 --}}
    <div role="alert" class="alert max-w-4xl mx-auto">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
      <div class="flex flex-col">
        <span class="text-sm text-slate-400">22-03-2022</span>
        <span class="text-xl font-bold">Task 2</span>
      </div>
      <div>
        <div class="tooltip" data-tip="Detail">
          <button class="btn btn-sm shadow-lg bg-base-200 rounded-full">View</button>
        </div>
        <div class="tooltip" data-tip="Edit">
          <button class="btn btn-sm shadow-lg bg-yellow-500 rounded-full">Edit</button>
        </div>
        <div class="tooltip" data-tip="Selesai">
          <button class="btn btn-sm btn-success rounded-full">Done</button>
        </div>
      </div>
    </div>
    {{-- akhir task 2 --}}
  </div>
</div>
{{-- akhir content --}}
@endsection