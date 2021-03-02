@extends('backend.layout_challenge')

@section('content')

  <div class="content-wrapper tab-content" id="custom-content-below-tabContent">
    <section class="content tab-pane fade show active" id="custom-content-below-general" role="tabpanel"
      aria-labelledby="custom-content-below-general-tab">

      <div class="container-fluid">
        @csrf

        <h4 class="pt-pb" style="margin-top: 20px">
          Challenges
        </h4>
        <div class="card card-primary">

          <div class="card-body">
            <div id="show_report_user_html">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td class="add-font">Add Challenge</td>
                    <td class="right-addbtn" data-toggle="modal" data-target="#modal-report-add">
                      <span>
                        <i class="fa fa-plus"></i>
                      </span>
                    </td>
                  </tr>
                  {{-- <tr>
                    <th style="">English Name</th>
                    <th style="width:100px" class="right-editbtn">
                      <span>
                        <i class="fa fa-edit"></i>
                      </span>
                    </th>
                  </tr> --}}
                  @foreach ($challenges as $challenge)
                    <tr>
                      <td>{{ $challenge->name_english }}</td>
                      <td style="width:100px" class="right-editbtn" data-toggle="modal"
                        data-target="#modal-report-edit{{ $challenge->challenge_id }}">
                        <span>
                          <i class="fa fa-edit" style="cursor:pointer"></i>
                        </span>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              <!-- challenge add modal -->
              <div class="modal fade" id="modal-report-add">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add Challenge</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('saveChallenge') }}" method="post">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <div><label for="author">Challenge name</label></div>
                            <span>English</span>
                            <input type="text" name="name_english" class="form-control" required>
                            <span>French</span>
                            <input type="text" name="name_frensh" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <div><label for="tool description">Challenge Description</label></div>
                            <span>English</span>
                            <textarea name="description_english" class="form-control" required></textarea>
                            <span>French</span>
                            <textarea name="description_frensh" class="form-control" required></textarea>
                          </div>
                          <div class="form-group">
                            <div><label for="icon">Icon</label></div>
                            <input type="text" name="icon" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <table style="width:100%;">
                              <tr>
                                <td style="width:30%; text-align:center">
                                    <div><label for="everyday">Everyday</label></div>
                                    <input type="checkbox" id="everyday" name="everyday" class="form-control">
                                </td>
                                <td style="width:10%; text-align:center; transform: scale(0.7)">
                                  <div><label for="monday">M</label></div>
                                  <input type="checkbox" id="monday" name="monday" class="form-control">
                                </td>
                                <td style="width:10%; text-align:center; transform: scale(0.7)">
                                  <div><label for="tuesday">T</label></div>
                                  <input type="checkbox" id="tuesday" name="tuesday" class="form-control">
                                </td>
                                <td style="width:10%; text-align:center; transform: scale(0.7)">
                                  <div><label for="wednesday">W</label></div>
                                  <input type="checkbox" id="wednesday" name="wednesday" class="form-control">
                                </td>
                                <td style="width:10%; text-align:center; transform: scale(0.7)">
                                  <div><label for="thursday">Th</label></div>
                                  <input type="checkbox" id="thursday" name="thursday" class="form-control">
                                </td>
                                <td style="width:10%; text-align:center; transform: scale(0.7)">
                                  <div><label for="friday">F</label></div>
                                  <input type="checkbox" id="friday" name="friday" class="form-control">
                                </td>
                                <td style="width:10%; text-align:center; transform: scale(0.7)">
                                  <div><label for="saturday">Sa</label></div>
                                  <input type="checkbox" id="saturday" name="saturday" class="form-control">
                                </td>
                                <td style="width:10%; text-align:center; transform: scale(0.7)">
                                  <div><label for="sunday">S</label></div>
                                  <input type="checkbox" id="sunday" name="sunday" class="form-control">
                                </td>
                              </tr>
                            </table>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-success shadow-btn btn-block">Add Challenge</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->



              @foreach ($challenges as $challenge)
                <!-- challenge edit modal -->
                <div class="modal fade" id="modal-report-edit{{ $challenge->challenge_id }}">

                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Edit Challenge</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('editChallenge', $challenge->challenge_id) }}" method="post"
                          enctype="multipart/form-data">
                          @csrf
                          <div class="box-body">
                            <div class="form-group">
                              <div><label for="author">Tool name</label></div>
                              <span>English</span>
                              <input type="text" name="name_english" value="{{ $challenge->name_english }}"
                                class="form-control" required>
                              <span>French</span>
                              <input type="text" name="name_frensh" value="{{ $challenge->name_frensh }}"
                                class="form-control" required>
                            </div>
                            <div class="form-group">
                              <div><label for="tool description">Tool Description</label></div>
                              <span>English</span>
                              <textarea name="description_english" class="form-control"
                                required>{{ $challenge->description_english }}</textarea>
                              <span>French</span>
                              <textarea name="description_frensh" class="form-control"
                                required>{{ $challenge->description_frensh }}</textarea>
                            </div>
                            <div class="form-group">
                              <div><label for="icon">Icon</label></div>
                              <input type="text" name="icon" value="{{ $challenge->icon }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-success shadow-btn btn-block">Save changes</button>
                            </div>
                          </div>
                          <!-- /.box-body -->
                        </form>
                        <form action="{{ route('challenge.delete', $challenge->challenge_id) }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-red shadow-btn btn-block actionDelete">Remove
                            Challenge</button>
                        </form>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
              @endforeach
              <!-- /.modal -->
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
  </div>



@endsection
@section('javascript')
<script type="text/javascript">
    $(function () {
        // main product upload
        $( "#everyday" ).change(function(e) {

          $( "#monday" ).props("checked", this.checked);
          $( "#tuesday" ).props("checked", this.checked);
          $( "#wednesday" ).props("checked", this.checked);
          $( "#thursday" ).props("checked", this.checked);
          $( "#friday" ).props("checked", this.checked);
          $( "#saturday" ).props("checked", this.checked);
          $( "#sunday" ).props("checked", this.checked);
          
        });
       
    });
</script>
@endsection