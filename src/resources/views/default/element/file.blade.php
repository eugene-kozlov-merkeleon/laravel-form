<div class="form__element form__element_type_file @if($error) form__element_error @endif {{$class}}">
    <label class="form__label">{{ $label }}</label>
    <div class="form__element-container">
        <input @foreach($attributes as $attributeName => $attributeValue) {{ $attributeName }}="{{ $attributeValue }}" @endforeach type="file" @if ($multiple) multiple name="{{ $elementName }}[]" @else name="{{ $elementName }}" @endif  placeholder="{{ $placeholder }}">
        <div class="form__help">{{ $help }}</div>
        <div class="form__feedback">{{ $error }}</div>
    </div>
</div>