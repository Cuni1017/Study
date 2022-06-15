<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>

<body>
    <div id="wrap">
        <div id="content">
            <h1>瀏覽實習心得</h1>
            <div id="reflectionBox">
                <div class="reflection">
                    <div class="reflection-row">
                        <div class="reflection-img"><img src="../../image/心得.png"> </div>
                        <div class="reflection-text">
                            <div class="reflection-title">在明偉有限公司實習後，我學到了...</div>
                            <div class="reflection-content">內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容</div>
                        </div>
                    </div>
                    <div class="reflection-row">
                        <div class="reflection-img"><img src="../../image/心得.png"> </div>
                        <div class="reflection-text">
                            <div class="reflection-title">在OverWatch公司實習後，我學到了...</div>
                            <div class="reflection-content">內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- content -->
    </div> <!-- wrap -->
    <script>
        let oReflectionBox = document.getElementById('reflectionBox')
        let aReflection = document.getElementsByClassName("reflection-row")
        let oReflection_content = document.getElementsByClassName("reflection-content")[0]
        console.log(aReflection)
        for (let i = 0; i < aReflection.length; i++) {
            aReflection[i].index = i
            aReflection[i].onclick = function() {
                let _dialog = document.createElement('dialog')
                let _title = document.createElement('h3')
                let _p = document.createElement('p')
                let closeBtn = document.createElement('input')
                closeBtn.type = "image"
                closeBtn.src = "../../image/x.svg"
                closeBtn.className = "closeBtn"

                _title.innerHTML = "Title" //心得標題
                _p.innerHTML = "Content" //心得內容
                _dialog.appendChild(_title)
                _dialog.appendChild(_p)
                _dialog.appendChild(closeBtn)
                oReflectionBox.appendChild(_dialog)
                _dialog.showModal()

                closeBtn.onclick = function() {
                    _dialog.close()
                }

            }
        }
    </script>
</body>

</html>