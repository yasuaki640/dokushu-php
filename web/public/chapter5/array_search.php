<?php

$data = ['PHP', '' => 'JavaScript', 'PHP', 'Java', 'C#'];

if (!in_array('Ruby', $data)) {
    print 'Not Found';
} else {
    print 'Found';
}
