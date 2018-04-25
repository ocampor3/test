@extends('layouts.app')

@section('content')
<br>
    <h1>Articles</h1>
    @if(count($articles) > 0)
        @foreach($articles as $article)
        <div class="well">
            <h3><a href="/articles/{{$article->Id}}">{{$article->Title}}</a></h3>
            <!--<small>Created By: {{$article->CreatedBy}}</small> : <small>Created Date: {{$article->CreatedDate}}</small><br>-->
            <small>ID: {{$article->Id}}</small><br>
            <small>Location: {{$article->Title}}</small><br>
            <small>Latitude and Longitude: {{$article->Value}}</small><br><br>
            <!--<small>CategoryID: {{$article->CategoryId}}</small>
            <small>Type: {{$article->Type}}</small><br>
            <small>Icon: {{$article->Icon}}</small><br>
            <small>IconName: {{$article->IconName}}</small><br>
            <small>Geo Location Assign User: {{$article->GeoLocAssignedUserId}}</small><br>
            <small>Filename: {{$article->FileName}}</small><br>
            <small>Calendar Value ID:{{$article->CalendarValueId}}</small><br>
            <small>Menu Footer:{{$article->MenuFooter}}</small><br>
            <small>Top Banner Show:{{$article->TopBannerShow}}</small><br>
            <small>Allow Share: {{$article->AllowShare}}</small><br>
            <small>Status: {{$article->Status}}</small><br>
            <small>IsArticle: {{$article->IsArticle}}</small><br>
            <small>Article ID:{{$article->ArticleId}}</small><br>
            <small>Sort Order: {{$article->SortOrder}}</small><br>
            <small>SiteCode: {{$article->SiteCode}}</small><br>
            <small>IsDelete: {{$article->IsDelete}}</small><br>
            <small>Modified By: {{$article->ModifiedBy}}</small> | <small>Modified Date: {{$article->ModifiedDate}}</small><br>-->
        </div>
        @endforeach
        {{$articles->links()}}
    @else
    <p> No articles found </p>
    @endif
@endsection
