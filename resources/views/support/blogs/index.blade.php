@extends('layouts.support')

@section('title', 'Blog Posts')
@section('page_title', 'Blog Posts')
@section('page_subtitle', 'Manage all blog content.')

@section('content')

<div class="card">
    <div class="cardHeader">
        <div>
            <h3>All Posts</h3>
            <p>{{ $posts->total() }} total blog posts</p>
        </div>

        <a href="{{ route('support.blogs.create') }}" class="btn primary">
            New Post
        </a>
    </div>

    {{-- Filters --}}
    <div class="cardBody" style="border-bottom:1px solid rgba(255,255,255,.06); padding-bottom:14px;">
        <form method="GET" action="{{ route('support.blogs.index') }}" style="display:flex; gap:10px; flex-wrap:wrap; align-items:center;">
            <input type="text" name="search" placeholder="Search title or category…"
                   value="{{ request('search') }}" style="max-width:260px;">
            <select name="status" style="max-width:160px;">
                <option value="">All Status</option>
                <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
            <button class="btn sm" type="submit">Filter</button>
            @if(request('search') || request('status'))
                <a href="{{ route('support.blogs.index') }}" class="btn sm">Clear</a>
            @endif
        </form>
    </div>

    <div class="cardBody">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td>
                        <div style="font-weight:600;">{{ Str::limit($post->title, 45) }}</div>
                        <div class="hint" style="font-size:11px;">/blog/{{ $post->slug }}</div>
                    </td>
                    <td>{{ $post->category ?? '—' }}</td>
                    <td>{{ $post->user->name ?? '—' }}</td>
                    <td>
                        <span class="badge {{ $post->is_published ? 'ok' : 'warn' }}">
                            {{ $post->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </td>
                    <td style="white-space:nowrap;">{{ $post->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('support.blogs.edit', $post) }}" class="btn sm">Edit</a>

                        <form method="POST"
                              action="{{ route('support.blogs.destroy', $post) }}"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn sm danger"
                                    onclick="return confirm('Delete this post?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="opacity:.6;">No blog posts found</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        @if($posts->hasPages())
            <div style="margin-top:14px; display:flex; justify-content:center;">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</div>

@endsection
