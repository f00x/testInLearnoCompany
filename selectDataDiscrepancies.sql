SELECT * FROM testInLearno.a
                  left join b on b.id=a.b_id
where
    a.b_id is not null
  and b.id is null
;