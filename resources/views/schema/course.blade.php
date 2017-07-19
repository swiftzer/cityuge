@inject('presenter', 'CityUGE\Presenters\SchemaPresenter')

<script type="application/ld+json">
{!! $presenter->getCourseSchema($course) !!}
</script>
