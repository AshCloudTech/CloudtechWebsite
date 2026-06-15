{{-- resources/views/support/dashboard.blade.php --}}
@extends('layouts.support')

@section('title', 'Dashboard')
@section('page_title', 'Support Dashboard')
@section('page_subtitle', 'Blog management and content overview.')

@section('content')
    <section class="grid cols-3">
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Total Posts</div>
                    <div class="value">{{ $totalPosts }}</div>
                </div>
                <span class="badge">Blog</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Published</div>
                    <div class="value">{{ $publishedPosts }}</div>
                </div>
                <span class="badge ok">Live</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Drafts</div>
                    <div class="value">{{ $draftPosts }}</div>
                </div>
                <span class="badge warn">Draft</span>
            </div>
        </div>
    </section>

    <section class="grid cols-2" style="margin-top:14px;">
        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>Quick actions</h3>
                    <p>Blog management shortcuts</p>
                </div>
            </div>
            <div class="cardBody">
                <div class="btnRow">
                    <a class="btn primary" href="{{ route('support.blogs.create') }}">New Blog Post</a>
                    <a class="btn" href="{{ route('support.blogs.index') }}">All Posts</a>
                    <a class="btn" href="{{ route('blog.index') }}" target="_blank">View Blog</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>Recent posts</h3>
                    <p>Latest blog entries</p>
                </div>
            </div>
            <div class="cardBody">
                @forelse($recentPosts as $post)
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid rgba(255,255,255,.06);">
                        <div>
                            <div style="font-weight:600;">{{ Str::limit($post->title, 40) }}</div>
                            <div class="hint" style="font-size:12px;">{{ $post->created_at->diffForHumans() }}</div>
                        </div>
                        <span class="badge {{ $post->is_published ? 'ok' : 'warn' }}">
                            {{ $post->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </div>
                @empty
                    <div style="opacity:.6; padding:12px 0;">No posts yet. Create your first blog post!</div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="grid cols-1" style="margin-top:14px;">
        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>System status</h3>
                    <p>Environment & services</p>
                </div>
                <span class="badge ok">OK</span>
            </div>
            <div class="cardBody">
                <div class="grid cols-2">
                    <div>
                        <div class="hint">Role</div>
                        <div style="font-family:var(--mono); margin-top:6px;">Support</div>
                    </div>
                    <div>
                        <div class="hint">User</div>
                        <div style="font-family:var(--mono); margin-top:6px;">{{ auth()->user()->email ?? '—' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
