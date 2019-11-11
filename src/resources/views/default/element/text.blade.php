<div class="form__element form__element_type_text @if($error) form__element_error @endif {{$class}}">
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
        @if ($postfix)
        <div class="form__element-group">
        @endif
            <input @foreach($attributes as $attributeName => $attributeValue) {{ $attributeName }}="{{ $attributeValue }}" @endforeach type="text" value="{{ $value }}" name="{{ $elementName }}" placeholder="{{ $placeholder }}">
            @if ($postfix)
            <span class="form__element-group-addon">{{$postfix}}</span>
            @endif
        @if ($postfix)
        </div>
        @endif
        <div class="form__help">{{ $help }}</div>
        <div class="form__feedback">{{ $error }}</div>
    </div>
</div>