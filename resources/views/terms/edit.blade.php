@extends('statamic::layout')
@section('title', __('Edit Term'))

@section('content')

    <term-publish-form
        publish-container="base"
        :initial-actions="{{ json_encode($actions) }}"
        method="patch"
        taxonomy-title="{{ $taxonomy['title'] }}"
        taxonomy-url="{{ $taxonomy['url'] }}"
        initial-title="{{ $title }}"
        initial-reference="{{ $reference }}"
        :initial-fieldset="{{ json_encode($blueprint) }}"
        :initial-values="{{ json_encode($values) }}"
        :initial-localized-fields="{{ json_encode($localizedFields) }}"
        :initial-meta="{{ json_encode($meta) }}"
        :initial-published="{{ bool_str($published) }}"
        initial-permalink="{{ $permalink }}"
        :initial-localizations="{{ json_encode($localizations) }}"
        :initial-has-origin="{{ bool_str($hasOrigin) }}"
        :initial-origin-values="{{ json_encode($originValues) }}"
        :initial-origin-meta="{{ json_encode($originMeta) }}"
        initial-site="{{ $locale }}"
        :initial-is-working-copy="{{ bool_str($hasWorkingCopy) }}"
        :initial-is-root="{{ bool_str($isRoot) }}"
        :revisions-enabled="{{ bool_str($revisionsEnabled) }}"
        {{-- :amp="{{ bool_str($term->ampable()) }}" --}}
        :initial-read-only="{{ bool_str($readOnly) }}"
        :preloaded-assets="{{ json_encode($preloadedAssets) }}"
    ></term-publish-form>

@endsection