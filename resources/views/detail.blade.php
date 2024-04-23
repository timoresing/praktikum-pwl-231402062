@extends('layouts.layout')

@section('content')
{{-- content --}}
<div class="flex justify-center mt-10 flex-col gap-10">
    <form action="/showTask" method="POST">
        @method('put')
        @csrf
        <label class="form-control w-full max-w-lg mx-auto">
            <div class="label">
                <span class="label-text text-emerald-600">Task Detail</span>
            </div>
            <div class="flex flex-col gap-3">

                <div role="alert" class="alert max-w-4xl mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="flex flex-col">
                        <span class="text-sm text-slate-400">{{ $task->tanggal }}</span>
                        <span class="text-xl font-bold">{{ $task->task }}</span>
                    </div>
                </div>
            </div>
            <div class="label">
            </div>
            {{-- button add --}}
            <button type="submit" class="btn btn-success w-36 self-center rounded-full">Back</button>
            {{-- akhir button add --}}
        </label>
    </form>
</div>
{{-- akhir content --}}
@endsection