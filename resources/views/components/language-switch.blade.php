<form action="{{ route('language.switch') }}" method=POST class="">
    @csrf

    <select name="language" onchange="this.form.submit()" class="">
        <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>Русский</option>
        <option value="tur" {{ app()->getLocale() == 'tur' ? 'selected' : '' }}>Türkçe</option>
        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
    </select>
</form>