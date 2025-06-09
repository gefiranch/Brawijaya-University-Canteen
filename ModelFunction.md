# Brawijaya-University-Canteen

**MODEL**
_Model.class.php_
function construct() //koneksi ke database 'canteen'

_CanteenModel.class.php_
function getAllCanteen() //melihatkan semua kantin di view/list.php
function getCanteenById() //melihatkan detail dari kantin yang dipilih dari view/list.php

_CommentModel.class.php_
function getCommentsByUserId() //melihatkan komentar user di halaman view/comment.php
function getCommentsByCanteenId() //melihatkan komentar user di halaman view/detail.php
function addComment() //
function deleteComment() //

_likeModel.class.php_
function getlikesByUserId() //melihatkan komentar user di halaman view/like.php
function addlike() //
function deletelike() //

_UserModel.class.php_
function register()
function login()
