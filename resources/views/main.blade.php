<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	@component( 'partials.head' )
		@yield('title')
	@endcomponent

	<body class="bcd antialiased">

		@include('partials.header')

		<main class="bcd__content">
				<section class="bcd__content--title">
					<div class="left">
						<h1>@yield('title')</h1>
					</div>
				</section><!-- .bcd__content--title -->
				<section class="bcd__content--wrap">
					@yield('content')
				</section><!-- .bcd__content--wrap -->
		</main><!-- .bcd__content -->

		@include('partials.sidebar')
	</body><!-- .bcd -->
</html>
