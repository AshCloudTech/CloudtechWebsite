@extends('layouts.app')

@section('title', 'Audit Logs')

@section('content')
    <h1 class="text-xl font-semibold">Audit Logs</h1>

    <div class="mt-4 overflow-hidden rounded bg-white shadow-sm">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-left">
            <tr>
                <th class="px-4 py-2">When</th>
                <th class="px-4 py-2">User</th>
                <th class="px-4 py-2">Event</th>
                <th class="px-4 py-2">Subject</th>
                <th class="px-4 py-2">Properties</th>
            </tr>
            </thead>
            <tbody>
            @foreach($activities as $a)
                <tr class="border-t align-top">
                    <td class="px-4 py-2 whitespace-nowrap">{{ $a->created_at?->format('Y-m-d H:i:s') }}</td>
                    <td class="px-4 py-2">{{ $a->causer?->email ?? '—' }}</td>
                    <td class="px-4 py-2">{{ $a->event ?? $a->description }}</td>
                    <td class="px-4 py-2">{{ class_basename($a->subject_type) }} #{{ $a->subject_id }}</td>
                    <td class="px-4 py-2"><pre class="whitespace-pre-wrap text-xs">{{ json_encode($a->properties, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) }}</pre></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $activities->links() }}
    </div>
@endsection
