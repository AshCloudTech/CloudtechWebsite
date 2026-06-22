@extends('layouts.support')

@section('title', 'Edit Blog Post')
@section('page_title', 'Edit Blog Post')

@section('content')

<form method="POST"
      action="{{ route('support.blogs.update', $blog) }}"
      enctype="multipart/form-data"
      class="card">
    @csrf
    @method('PUT')

    <div class="cardHeader">
        <div>
            <h3>Edit Post</h3>
            <p>Update "{{ Str::limit($blog->title, 50) }}"</p>
        </div>
        <span class="badge {{ $blog->is_published ? 'ok' : 'warn' }}">
            {{ $blog->is_published ? 'Published' : 'Draft' }}
        </span>
    </div>

    <div class="cardBody">
        @if ($errors->any())
            <div style="margin-bottom:14px; padding:12px; border:1px solid rgba(255,0,0,.5); border-radius:8px;">
                <ul style="margin:0; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li style="color:var(--danger);">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid cols-2">
            <div class="field">
                <label for="title">Title *</label>
                <input id="title" name="title" value="{{ old('title', $blog->title) }}" required
                       placeholder="Enter blog post title">
            </div>

            <div class="field">
                <label for="slug">Slug</label>
                <input id="slug" name="slug" value="{{ old('slug', $blog->slug) }}"
                       placeholder="url-friendly-slug">
            </div>
        </div>

        <div class="grid cols-2" style="margin-top:10px;">
            <div class="field">
                <label for="category">Category</label>
                <input id="category" name="category" value="{{ old('category', $blog->category) }}"
                       placeholder="e.g. Digital Marketing, SEO, Web Dev">
            </div>

            <div class="field">
                <label for="featured_image">Featured Image</label>
                @if($blog->featuredImageUrl())
                    <div style="margin-bottom:8px;">
                        <img src="{{ $blog->featuredImageUrl() }}" alt="Current image"
                             style="max-width:200px; max-height:120px; border-radius:8px; object-fit:cover;">
                        <div class="hint" style="margin-top:4px;">Current image — upload a new one to replace</div>
                    </div>
                @endif
                <input id="featured_image" name="featured_image" type="file"
                       accept="image/jpeg,image/png,image/webp">
                <div class="hint" style="margin-top:4px;">JPG, PNG, or WebP (max 2MB)</div>
            </div>
        </div>

        <div class="field" style="margin-top:10px;">
            <label for="excerpt">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="3"
                      placeholder="Short summary shown on blog listing page">{{ old('excerpt', $blog->excerpt) }}</textarea>
        </div>

        <div class="field" style="margin-top:10px;">
            <label for="content">Content *</label>
            <textarea id="content" name="content" rows="15" required
                      placeholder="Write your blog post content here... HTML is supported.">{{ old('content', $blog->content) }}</textarea>
        </div>

        <div style="height:10px;"></div>
        <div style="padding:6px 0; font-size:12px; opacity:.65; letter-spacing:.06em; text-transform:uppercase;">
            SEO Settings
        </div>

        <div class="grid cols-2" style="margin-top:6px;">
            <div class="field">
                <label for="meta_title">Meta Title</label>
                <input id="meta_title" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}"
                       placeholder="SEO title (defaults to post title)">
            </div>

            <div class="field">
                <label for="meta_description">Meta Description</label>
                <textarea id="meta_description" name="meta_description" rows="2"
                          placeholder="SEO description for search engines">{{ old('meta_description', $blog->meta_description) }}</textarea>
            </div>
        </div>

        <div class="field" style="margin-top:10px;">
            <label>
                <input type="checkbox" name="is_published" value="1"
                       {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                Published
            </label>
            <div class="hint" style="margin-top:4px;">Uncheck to revert to draft.</div>
        </div>
    </div>

    <div class="cardFooter">
        <button class="btn primary" type="submit">Update Post</button>
        <a href="{{ route('support.blogs.index') }}" class="btn">Cancel</a>
    </div>
</form>

@endsection
