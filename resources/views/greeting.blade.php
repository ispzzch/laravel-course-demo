<p>Hello, {{ $name }}.</p>
<p>{{ isset($name) ? $name : 'Default' }}</p>
<p>{{ $name or 'Default' }}</p>
<p>目前的 UNIX 時間戳記為 {{ time() }}。</p>