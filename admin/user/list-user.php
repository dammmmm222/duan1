<div class="home mt-5 px-10  py-10 mr-8 bg-[#F4F6FA] h-auto rounded">
    <h1 class="text-center text-cyan-500 py-6  text-4xl " style="font-family: 'Courier New', Courier, monospace">DANH SÁCH NGƯỜI DÙNG</h1>
    <div class="ad-r mx-auto">
        <div class="justify-between mx-auto grid grid-cols-3 items-center">
            <h1 class="text-[20px] font-semibold text-sky-600 my-5">Danh sách user</h1>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search " viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
                <input type="text" placeholder="Search..." class="px-4 py-2 ml-2 rounded-lg">

            </div>
            <a href="index.php?act=them_tai_khoan" class=" bg-yellow-300 text-center  py-2 px-2 rounded-md hover:bg-[#BAAACE] hover:text-white mx-4 font-semibold text-[#551AA9] my-5">ADD
                User</a>
        </div>
        <?php if (isset($_GET['msg'])) : ?>
            <div class="alert alert-success">
                <?= $_GET['msg'] ?>
            </div>
        <?php endif ?>
        <table class="table shadow-lg shadow-cyan-500/50 border-2 border-cyan-500 mx-auto">
            <tr class="border-2 border-cyan-500  text-[#551AA9] ">
                <th class="border-2 border-cyan-500   py-2">ID</th>
                <th class="border-2 border-cyan-500  py-2">Username</th>
                <th class="border-2 border-cyan-500  py-2">Password</th>
                <th class="border-2 border-cyan-500  py-2">Họ và tên</th>
                <th class="border-2 border-cyan-500  py-2">SDT</th>
                <th class="border-2 border-cyan-500  py-2">Địa chỉ</th>
                <th class="border-2 border-cyan-500  py-2">Email</th>
                <th class="border-2 border-cyan-500  py-2">Vai trò</th>
                <th class="border-2 border-cyan-500  py-2">
                    Action
                </th>
            </tr>

            <?php
            foreach ($users as $user) {
                extract($user);
                
                $sua_us = "index.php?act=sua_us&id=" . $id;
                $xoa_us = "index.php?act=xoa_us&id=" . $id;
                if($role == 0){
                    $role = 'Khách hàng';
                }
                else{
                    $role = 'Quản trị viên';
                }
            ?>
                <tr class="text-[#551AA9] ">
                    <td class="border-2 border-cyan-500 py-4 px-2 text-center">
                        <?= $id ?>
                    </td>
                    <td class="border-2 border-cyan-500 py-4 px-2 text-center">
                        <?= $user_name ?>
                    </td>
                    <td class="border-2 border-cyan-500 py-4 px-2 text-center">
                        <?= $password ?>
                    </td><td class="border-2 border-cyan-500 py-4 px-2 text-center">
                        <?= $full_name ?>
                    </td>
                    <td class="border-2 border-cyan-500 py-4 px-2 text-center">
                        <?= $phone ?>
                    </td>
                    <td class="border-2 border-cyan-500 py-4 px-2 text-center">
                        <?= $address ?>
                    </td>
                    <td class="border-2 border-cyan-500 py-4 px-2 text-center">
                        <?= $email ?>
                    </td>
                    <td class="border-2 border-cyan-500 py-4 px-10 text-center">
                        <?= $role ?>
                    </td>

                    <td class="border-2 border-cyan-500 py-4 px-2 text-center">
                        <a class=" px-4 bg-[#1E74A4] hover:bg-[#BAAACE] hover:text-white text-white rounded-md mx-2" href="<?= $sua_us ?>">Sửa</a>
                        <a onclick="return confirm('Bạn có muốn xóa không')" class="text-white hover:bg-[#BAAACE] hover:text-white bg-[#AC3131]  px-4 rounded-md mx-2" href="<?= $xoa_us ?>">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
</div>
</div>
</body>

</html>