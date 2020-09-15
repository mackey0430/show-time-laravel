// いいねをするとき
$(document).on("click", ".like", function() {
    // $thisはたくさんあるlikeの中で今回クリックされたもの
    let id = $(this).data("id");

    // let count = $("count").text();
    // console.log(count);

    // ajax通信開始
    $.ajax({
        // 通信の設定を書くブロック
        url: "/post/like",
        type: "POST",
        dataType: "json",
        data: {
            id: id
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    })
        .done(data => {
            // 通信が成功した時
            console.log(data);
            // クラスを追加
            $(this).addClass("fas removeLike");
            // クラスを削除
            $(this).removeClass("far like");
        })

        .fail(error => {
            // 通信が失敗した時
        });
});

// いいねを解除する時
$(document).on("click", ".removeLike", function() {
    // $thisはたくさんあるlikeの中で今回クリックされたもの
    let id = $(this).data("id");

    // ajax通信開始
    $.ajax({
        // 通信の設定を書くブロック
        url: "/post/removeLike",
        type: "POST",
        dataType: "json",
        data: {
            id: id
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    })
        .done(data => {
            // 通信が成功した時
            console.log(data);
            // クラスを追加
            $(this).addClass("far like");
            // クラスを削除
            $(this).removeClass("fas removeLike");
        })
        .fail(error => {
            // 通信が失敗した時
        });
});
