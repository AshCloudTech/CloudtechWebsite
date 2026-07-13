{{-- resources/views/support/dashboard.blade.php --}}
@extends('layouts.support')

@section('title', 'Dashboard')
@section('page_title', 'Support Dashboard')
@section('page_subtitle', 'Website content, enquiries, and blog management at a glance.')

@section('content')
    <section class="grid cols-4">
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">New Leads</div>
                    <div class="value">{{ $newLeads }}</div>
                </div>
                <span class="badge warn">Leads</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">New Consultations</div>
                    <div class="value">{{ $newConsultations }}</div>
                </div>
                <span class="badge warn">Requests</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Blog Posts</div>
                    <div class="value">{{ $totalPosts }}</div>
                </div>
                <span class="badge">Blog</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Published Posts</div>
                    <div class="value">{{ $publishedPosts }}</div>
                </div>
                <span class="badge ok">Live</span>
            </div>
        </div>
    </section>

    <section class="grid cols-4" style="margin-top:14px;">
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">SMTP Mailers</div>
                    <div class="value">{{ $stats['smtp_mailers'] }}</div>
                </div>
                <span class="badge">Email</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Contact Forms</div>
                    <div class="value">{{ $stats['contact_forms'] }}</div>
                </div>
                <span class="badge">Forms</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Case Studies</div>
                    <div class="value">{{ $stats['case_studies'] }}</div>
                </div>
                <span class="badge">Content</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Portfolio Items</div>
                    <div class="value">{{ $stats['portfolio_items'] }}</div>
                </div>
                <span class="badge">Portfolio</span>
            </div>
        </div>
    </section>

    <section class="grid cols-2" style="margin-top:14px;">
        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>Quick actions</h3>
                    <p>Common support tasks</p>
                </div>
            </div>
            <div class="cardBody">
                <div class="btnRow">
                    <a class="btn primary" href="{{ route('support.leads.index') }}">View Leads</a>
                    <a class="btn" href="{{ route('support.consultations.index') }}">Consultations</a>
                    <a class="btn" href="{{ route('support.settings.smtp.index') }}">SMTP Mailers</a>
                    <a class="btn" href="{{ route('support.settings.contact-forms.index') }}">Contact Forms</a>
                    <a class="btn" href="{{ route('support.case-studies.index') }}">Case Studies</a>
                    <a class="btn" href="{{ route('support.portfolio-items.index') }}">Portfolio</a>
                    <a class="btn" href="{{ route('support.business-results.index') }}">SEO Results</a>
                    <a class="btn" href="{{ route('support.blogs.create') }}">New Blog Post</a>
                    <a class="btn" href="{{ route('blog.index') }}" target="_blank">View Blog</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>Activity summary</h3>
                    <p>Current workload overview</p>
                </div>
            </div>
            <div class="cardBody">
                <div class="grid cols-2" style="gap:12px;">
                    <div>
                        <div class="hint">Total leads</div>
                        <div style="font-family:var(--mono); margin-top:6px;">{{ $totalLeads }}</div>
                    </div>
                    <div>
                        <div class="hint">Total consultations</div>
                        <div style="font-family:var(--mono); margin-top:6px;">{{ $totalConsultations }}</div>
                    </div>
                    <div>
                        <div class="hint">Blog drafts</div>
                        <div style="font-family:var(--mono); margin-top:6px;">{{ $draftPosts }}</div>
                    </div>
                    <div>
                        <div class="hint">SEO business results</div>
                        <div style="font-family:var(--mono); margin-top:6px;">{{ $stats['business_results'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grid cols-3" style="margin-top:14px;">
        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>Recent leads</h3>
                    <p>Latest contact submissions</p>
                </div>
                <a class="btn" href="{{ route('support.leads.index') }}">View all</a>
            </div>
            <div class="cardBody">
                @forelse($recentLeads as $lead)
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid rgba(255,255,255,.06);">
                        <div>
                            <div style="font-weight:600;">{{ Str::limit($lead->name ?: $lead->email, 32) }}</div>
                            <div class="hint" style="font-size:12px;">{{ $lead->created_at->diffForHumans() }}</div>
                        </div>
                        <span class="badge {{ $lead->status === 'new' ? 'warn' : 'ok' }}">
                            {{ ucfirst($lead->status) }}
                        </span>
                    </div>
                @empty
                    <div style="opacity:.6; padding:12px 0;">No leads yet.</div>
                @endforelse
            </div>
        </div>

        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>Recent consultations</h3>
                    <p>Latest booking requests</p>
                </div>
                <a class="btn" href="{{ route('support.consultations.index') }}">View all</a>
            </div>
            <div class="cardBody">
                @forelse($recentConsultations as $consultation)
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid rgba(255,255,255,.06);">
                        <div>
                            <div style="font-weight:600;">{{ Str::limit($consultation->full_name, 32) }}</div>
                            <div class="hint" style="font-size:12px;">{{ $consultation->created_at->diffForHumans() }}</div>
                        </div>
                        <span class="badge {{ $consultation->status === 'new' ? 'warn' : 'ok' }}">
                            {{ str_replace('_', ' ', ucfirst($consultation->status)) }}
                        </span>
                    </div>
                @empty
                    <div style="opacity:.6; padding:12px 0;">No consultations yet.</div>
                @endforelse
            </div>
        </div>

        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>Recent posts</h3>
                    <p>Latest blog entries</p>
                </div>
                <a class="btn" href="{{ route('support.blogs.index') }}">View all</a>
            </div>
            <div class="cardBody">
                @forelse($recentPosts as $post)
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid rgba(255,255,255,.06);">
                        <div>
                            <div style="font-weight:600;">{{ Str::limit($post->title, 32) }}</div>
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
                    <p>Environment & account</p>
                </div>
                <span class="badge ok">OK</span>
            </div>
            <div class="cardBody">
                <div class="grid cols-3">
                    <div>
                        <div class="hint">Role</div>
                        <div style="font-family:var(--mono); margin-top:6px;">Support</div>
                    </div>
                    <div>
                        <div class="hint">User</div>
                        <div style="font-family:var(--mono); margin-top:6px;">{{ auth()->user()->email ?? '—' }}</div>
                    </div>
                    <div>
                        <div class="hint">Console</div>
                        <div style="font-family:var(--mono); margin-top:6px;">Website + Blog</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
