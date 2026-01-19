{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('page_subtitle', 'Overview of access control and security posture.')

@section('content')
    <section class="grid cols-4">
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Total Users</div>
                    <div class="value">{{ $kpis['total_users'] ?? ($totalUsers ?? '—') }}</div>
                </div>
                <span class="badge">RBAC</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Total Roles</div>
                    <div class="value">{{ $kpis['total_roles'] ?? ($totalRoles ?? '—') }}</div>
                </div>
                <span class="badge">Access</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Total Permissions</div>
                    <div class="value">{{ $kpis['total_permissions'] ?? ($totalPermissions ?? '—') }}</div>
                </div>
                <span class="badge">Policy</span>
            </div>
        </div>
        <div class="card">
            <div class="kpi">
                <div>
                    <div class="label">Audit Events (24h)</div>
                    <div class="value">{{ $kpis['audit_24h'] ?? ($audit24h ?? '—') }}</div>
                </div>
                <span class="badge ok">Tracking</span>
            </div>
        </div>
    </section>

    <section class="grid cols-2" style="margin-top:14px;">
        <div class="card">
            <div class="cardHeader">
                <div>
                    <h3>Quick actions</h3>
                    <p>Common admin operations</p>
                </div>
            </div>
            <div class="cardBody">
                <div class="btnRow">
                    <a class="btn primary" href="{{ route('admin.users.index') }}">Manage Users</a>
                    <a class="btn" href="{{ route('admin.roles.index') }}">Role Management</a>
                    <a class="btn" href="{{ route('admin.permissions.index') }}">Permission Matrix</a>
                    <a class="btn" href="{{ route('admin.audit-logs.index') }}">View Audit Logs</a>
                </div>

                @if (session()->has('impersonator_id'))
                    <div style="margin-top:14px;" class="card">
                        <div class="cardHeader">
                            <div>
                                <h3>Impersonation active</h3>
                                <p>You are currently impersonating another user.</p>
                            </div>
                            <span class="badge warn">Active</span>
                        </div>
                        <div class="cardBody">
                            <form method="POST" action="{{ route('admin.impersonate.stop') }}">
                                @csrf
                                <button class="btn danger" type="submit">Stop impersonation</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>

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
                        <div class="hint">APP_ENV</div>
                        <div style="font-family:var(--mono); margin-top:6px;">{{ config('app.env') }}</div>
                    </div>
                    <div>
                        <div class="hint">APP_DEBUG</div>
                        <div style="font-family:var(--mono); margin-top:6px;">{{ config('app.debug') ? 'true' : 'false' }}</div>
                    </div>
                    <div>
                        <div class="hint">Auth</div>
                        <div style="font-family:var(--mono); margin-top:6px;">breeze</div>
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
