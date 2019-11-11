<div class="form__element form__element_type_textarea @if($error) form__element_error @endif {{$class}}">
    <label class="form__label">
        @if (isset($icon['class']))
            <i class="{{$icon['class']}}"
            @if(isset($icon['attributes']))
                @foreach($icon['attributes'] as $iAttrName => $iAttrValue) {{ $iAttrName }}="{{ $iAttrValue }}" @endforeach
            @endif>
            </i>
        @endif
        {{ $label }}
    </label>
    <div class="form__element-container">
        <textarea rows="5" @foreach($attributes as $attributeName => $attributeValue) {{ $attributeName }}="{{ $attributeValue }}" @endforeach name="{{ $elementName }}" placeholder="{{ $placeholder }}">{{ $value }}</textarea>
        <div class="form__help">{{ $help }}</div>
        <div class="form__feedback">{{ $error }}</div>
    </div>
</div>