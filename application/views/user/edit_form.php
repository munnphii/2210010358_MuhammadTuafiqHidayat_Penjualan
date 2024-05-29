<main>
    <div class="container-fluid">
    </ol>
    <div class="card mb-4">
        <div class="card-body">
        <form action="<?php echo site_url('user/edit') ?>" method="post">
        <div class="mb-3">
             <label for="username">USERNAME <code>*</code></label>
             <input class="form-control" type="hidden" name="id" value="<?-$user->id;?>" required />
             <input class="form-control <?php echo from_error('username') ? 'is-invalid':''?>"
                 type="text" name="username" value="<?-$user->username;?>" placeholder="USERNAME" required />
             <div class="invalid-feedback">
                <?php echo from_error('username') ?>
                </div>
        </div>
        <div class="mb-3">
            <label for="full_name">FULL NAME <code>*</code></label>
            <input class="form-control" type="text" name="full_name" value="<?=$user->full_name;?>" placeholder="FULL NAME" required />
        </div>
        <div class="mb-3">
            <label for="phone">PHONE </label>
            <input class="form-control" type="text" name="phone" value="<?=$user->phone;?>" placeholder="PHONE" required />
        </div>
        <div class="mb-3">
            <label for="email">EMAIL </label>
            <input class="form-control" type="text" name="email" value="<?=$user->email;?>" placeholder="EMAIL" required />
