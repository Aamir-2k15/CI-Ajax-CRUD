<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

    public function index()
    {

        // $posts = get_all('posts','id','DESC');
        // $data['posts'] = $posts;
        // echo '<pre>';print_r($posts); exit;
        // $this->load->view('inc/header');
        // $this->load->view('all', $data);
        // $this->load->view('inc/footer');
        $this->load->view('main');
    }
    public function all()
    {
        $posts = get_all('posts', 'id', 'DESC');
        // dd($posts);
        // $data['posts'] = $posts;
        $n = 1;
        foreach ($posts as $row) {
            ob_start();
            $records[] = "";
            ?>
    <tr id="<?php echo $n; ?>">
                            <td scope="row"><?php echo $row->id; ?></td>
                            <td><?php echo $row->title; ?></td>
                            <td id="row_body"><?php echo $row->body ?></td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-outline-secondary view" title="View" data-id="<?php echo  $row->id; ?>">
                                <i class="fas fa-eye"></i>
                                </a>

                                <a href="javascript:void(0)" class="btn btn-outline-primary edit" title="Edit" data-id="<?php echo $row->id; ?>">
                                <i class="fas fa-pencil-square-o" aria-hidden="true"></i>
                              </a>

                                <a href="javascript:void(0)" class="btn btn-outline-danger delete" title="Delete" data-id="<?php echo $row->id; ?>">
                                  <i class="fas fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
    <?php

            $record = ob_get_clean();
            $records[] .= $record;
            $status = 1;
            $message = "";
            $n++;
        }
        echo json_encode(array('Status' => $status, 'MSG' => $message, 'records' => $records));
    }
    // public function create()
    // {
    //     $this->load->view('inc/header');
    //     $this->load->view('create');
    //     $this->load->view('inc/footer');
    // }
    public function store()
    {
        // $this->form_validation->set_rules('title', 'Title', 'required');
        // $this->form_validation->set_rules('body', 'Body', 'required');
        // if ($this->form_validation->run() === false) {
        //     $this->load->view('inc/header');
        //     $this->load->view('create');
        //     $this->load->view('inc/footer');
        //     return;
        // }

        create('posts');

        $message =  "New record created successfully";
        $status = 1;
        echo json_encode(array('Status' => $status, 'MSG' => $message));
    }

    public function view_record()
    {
        $id = $this->input->post('id');
        // dd($id);
        $post =  get_by_id('posts', $id);
        // dd($post->title);
        $title = $post->title;
        $body = $post->body;
        $status = 1;
        $message = "1";
        echo json_encode(array('Status' => $status, 'MSG' => $message, 'id'=>$id, 'title'=>$title, 'body'=>$body));
    }

    // public function edit()
    // {
    //     $id = $this->input->post('id');
    //     $record = get_by_id('posts', $id);
    //     $status = 1;
    //     $message = "1";
    //     echo json_encode(array('Status' => $status, 'MSG' => $message));
    // }
    public function update_record()
    {
        // print_r($_REQUEST);
        $id = $this->input->post('id');
        //    echo $id ;
        _update('posts', $id);
        $status = 1;
        $message = "Record Updated";
        echo json_encode(array('Status' => $status, 'MSG' => $message));
    }
    public function delete_record()
    {
        $id = $this->input->post('id');
        _delete('posts', $id);
        $status = 1;
        $message = "Record Deleted";
        echo json_encode(array('Status' => $status, 'MSG' => $message));
    }
}
