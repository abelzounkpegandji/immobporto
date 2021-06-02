<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
   <div class="container" style="padding:30px 0;">
        <div class="col-md-12">
            <div class="pane panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6"> Tout les catégories</div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-rigth">Ajouter nouvelle catégorie</a>
                        </div>
                    </div>
                   
                </div>
                <div class="panel-body">
                    <table classe="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Catégory Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <<td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td></td>
                            @foreach
                        </tbody>
                    </table>
                    {{$categories->link()}}
                </div>
            </div>
        </div>
    </div>
</div>
